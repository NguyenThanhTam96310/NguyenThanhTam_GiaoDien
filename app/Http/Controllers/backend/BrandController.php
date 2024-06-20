<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Brand::where('status', '!=', 0)
            ->select('id', 'name', 'slug', 'image', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item) {
            $htmlparentid .= "<option  value='" . $item->id . "'>" . $item->name . "</option>";
            $htmlsortorder .= "<option  value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
        }

        return view("backend.brand.index", compact('list', 'htmlparentid', 'htmlsortorder'));
    }
    public function trash()
    {
        $list = Brand::where('status', '==', 0)
            ->select('id', 'name', 'slug', 'image', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.brand.trash", compact('list'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->parent_id = $request->parent_id;
        $brand->sort_order = $request->sort_order;
        $brand->slug = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $brand->slug . "." . $exten;
                $request->image->move(public_path("images/brands"), $filename);
                $brand->image = $filename;
            }
        }
        //end upload img

        $brand->status = $request->status;

        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = Auth::id() ?? 1;
        $brand->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }
        return view("backend.brand.show", compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }

        $list = Brand::where('status', '!=', 0)
            ->select('id', 'name', 'slug', 'image', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item) {
            if ($brand->parent_id == $item->id) {
                $htmlparentid .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $htmlparentid .= "<option  value='" . $item->id . "'>" . $item->name . "</option>";
            }
            if ($brand->sort_order - 1 == $item->sort_order) {
                $htmlsortorder .= "<option selected value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
            } else {
                $htmlsortorder .= "<option value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
            }
        }

        return view("backend.brand.edit", compact('brand', 'htmlparentid', 'htmlsortorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->parent_id = $request->parent_id;
        $brand->sort_order = $request->sort_order;
        $brand->slug = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $brand->slug . "." . $exten;
                $request->image->move(public_path("images/brands"), $filename);
                $brand->image = $filename;
            }
        }
        //end upload img

        $brand->status = $request->status;

        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = Auth::id() ?? 1;
        $brand->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //status=1->2,2->1
    public function status(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }

        $brand->status = ($brand->status == 2) ? 1 : 2;
        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = Auth::id() ?? 1;
        $brand->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.brand.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }

        $brand->status = 0;
        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = Auth::id() ?? 1;
        $brand->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.brand.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }

        $brand->status = 2;
        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = Auth::id() ?? 1;
        $brand->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.brand.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('admin.brand.index');
        }
        $brand->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.brand.trash');
    }
}
