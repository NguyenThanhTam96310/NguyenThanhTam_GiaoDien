<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Product::where('product.status', '!=', 0)
            ->join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->select('product.id', "product.image", "product.name", "category.name as categoryname", "brand.name as brandname", "product.status")
            ->orderBy('product.created_at', 'desc')
            ->get();
        return view("backend.product.index", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Product::where('product.status', '!=', 0)
            ->orderBy('product.created_at', 'desc')
            ->get();
        $list_category = Category::where('status', '!=', 0)
            ->select('id', 'name')
            ->orderby('created_at', 'desc')
            ->get();
        $list_brand = Brand::where('status', '!=', 0)
            ->select('id', 'name')
            ->orderby('created_at', 'desc')
            ->get();
        $htmlcategory = "";
        $htmlbrand = "";
        foreach ($list_category as $item) {
            $selected = old('category_id') == $item->id ? 'selected' : '';
            $htmlcategory .= "<option value='" . $item->id . "'$selected>" . $item->name . "</option>";
        }
        foreach ($list_brand as $item) {
            $selected = old('category_id') == $item->id ? 'selected' : '';
            $htmlbrand .= "<option value='" . $item->id . "'$selected>" . $item->name . "</option>";
        }

        return view("backend.product.create", compact('list', 'htmlcategory', 'htmlbrand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->qty = $request->qty;
        $product->detail = $request->detail;
        $product->description = $request->description;
        $product->slug = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $product->slug . "." . $exten;
                $request->image->move(public_path("images/products"), $filename);
                $product->image = $filename;
            }
        }
        //end upload img

        $product->status = $request->status;

        $product->created_at = date('Y-m-d H:i:s');
        $product->created_by = Auth::id() ?? 1;
        $product->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.product.index');
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
