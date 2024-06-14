<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Stringable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('status', '!=', 0)
            ->select('id', 'name', 'slug', 'image', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item) {
            $htmlparentid .= "<option  value='" . $item->id . "'>" . $item->name . "</option>";
            $htmlsortorder .= "<option  value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
        }

        return view("backend.category.index", compact('list', 'htmlparentid', 'htmlsortorder'));
    }

    public function trash()
    {
        $list = Category::where('status', '==', 0)
            ->select('id', 'name', 'slug', 'image', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.category.trash", compact('list'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->slug = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $category->slug . "." . $exten;
                $request->image->move(public_path("images/categorys"), $filename);
                $category->image = $filename;
            }
        }
        //end upload img

        $category->status = $request->status;

        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;
        $category->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        return view("backend.category.show", compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }

        $list = Category::where('status', '!=', 0)
            ->select('id', 'name', 'slug', 'image', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item) {
            if ($category->parent_id == $item->id) {
                $htmlparentid .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $htmlparentid .= "<option  value='" . $item->id . "'>" . $item->name . "</option>";
            }
            if ($category->sort_order - 1 == $item->sort_order) {
                $htmlsortorder .= "<option selected value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
            } else {
                $htmlsortorder .= "<option value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
            }
        }

        return view("backend.category.edit", compact('category', 'htmlparentid', 'htmlsortorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->slug = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $category->slug . "." . $exten;
                $request->image->move(public_path("images/categorys"), $filename);
                $category->image = $filename;
            }
        }
        //end upload img

        $category->status = $request->status;

        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;
        $category->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.category.index');
    }
    //status=1->2,2->1
    public function status(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }

        $category->status = ($category->status == 2) ? 1 : 2;
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;
        $category->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.category.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }

        $category->status = 0;
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;
        $category->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.category.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }

        $category->status = 2;
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;
        $category->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.category.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('admin.category.index');
        }
        $category->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.category.trash');
    }
}
