<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCategoryRequest;
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
            $htmlparentid .= "<option value='0'>" . $item->name . "</option>";
            $htmlsortorder .= "<option value='0'>" . $item->name . "</option>";
        }

        return view("backend.category.index", compact('list', 'htmlparentid', 'htmlsortorder'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
