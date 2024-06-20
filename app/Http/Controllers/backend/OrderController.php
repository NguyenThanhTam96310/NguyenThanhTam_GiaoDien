<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Order::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.order.index", compact('list'));
    }
    public function trash()
    {
        $list = Order::where('status', '=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.order.trash", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }
        return view("backend.order.show", compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }
        return view("backend.order.edit", compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }
        $order->user_id = $order->id;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->note = $request->note;

        $order->status = $request->status;

        $order->created_at = date('Y-m-d H:i:s');
        $order->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.order.index');
    }

    //status=1->2,2->1
    public function status(string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }

        $order->status = ($order->status == 2) ? 1 : 2;
        $order->created_at = date('Y-m-d H:i:s');

        $order->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.order.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }

        $order->status = 0;
        $order->created_at = date('Y-m-d H:i:s');

        $order->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.order.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }

        $order->status = 2;
        $order->created_at = date('Y-m-d H:i:s');

        $order->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.order.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $order = order::find($id);
        if ($order == null) {
            return redirect()->route('admin.order.index');
        }
        $order->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.order.trash');
    }
}
