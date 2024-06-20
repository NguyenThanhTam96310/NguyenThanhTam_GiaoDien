<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Banner::where('status', '!=', 0)
            ->select('id', 'name', 'image', 'link', 'status')
            ->orderby('created_at', 'asc')
            ->get();
        $htmlsortorder = "";
        foreach ($list as $item) {
            $htmlsortorder .= "<option value='0'>" . $item->name . "</option>";
        }

        return view("backend.banner.index", compact('list', 'htmlsortorder'));
    }

    public function trash()
    {
        $list = Banner::where('status', '=', 0)
            ->select('id', 'name', 'image', 'link', 'status')
            ->orderby('created_at', 'asc')
            ->get();
        return view("backend.banner.trash", compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner();

        $banner->name = $request->name;
        $banner->description = $request->description;
        $banner->sort_order = $request->sort_order;
        $banner->position = $request->position;
        $banner->link = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $banner->link . "." . $exten;
                $request->image->move(public_path("images/banners"), $filename);
                $banner->image = $filename;
            }
        }
        //end upload img

        $banner->status = $request->status;

        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;
        $banner->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }
        return view("backend.banner.show", compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }

        $list = banner::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        $htmlsortorder = "";
        foreach ($list as $item) {
            if ($banner->sort_order - 1 == $item->sort_order) {
                $htmlsortorder .= "<option selected value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
            } else {
                $htmlsortorder .= "<option value='" . ($item->sort_order + 1) . "'>" . $item->name . "</option>";
            }
        }

        return view("backend.banner.edit", compact('banner', 'htmlsortorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }

        $banner->name = $request->name;
        $banner->description = $request->description;
        $banner->position = "slideshow";
        $banner->sort_order = $request->sort_order;
        $banner->link = Str::of($request->name)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $banner->link . "." . $exten;
                $request->image->move(public_path("images/banners"), $filename);
                $banner->image = $filename;
            }
        }
        //end upload img

        $banner->status = $request->status;

        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;
        $banner->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.banner.index');
    }

    //status=1->2,2->1
    public function status(string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }

        $banner->status = ($banner->status == 2) ? 1 : 2;
        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;
        $banner->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.banner.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }

        $banner->status = 0;
        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;
        $banner->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.banner.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }

        $banner->status = 2;
        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;
        $banner->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.banner.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $banner = banner::find($id);
        if ($banner == null) {
            return redirect()->route('admin.banner.index');
        }
        $banner->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.banner.trash');
    }
}
