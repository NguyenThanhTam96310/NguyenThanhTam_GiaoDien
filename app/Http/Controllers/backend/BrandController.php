<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBrandRequest;
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
            ->orderby('created_at', 'asc')
            ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item) {
            $htmlparentid .= "<option value='0'>" . $item->name . "</option>";
            $htmlsortorder .= "<option value='0'>" . $item->name . "</option>";
        }

        return view("backend.brand.index", compact('list', 'htmlparentid', 'htmlsortorder'));
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
