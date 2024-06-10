<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBannerRequest;
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
