<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = User::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.user.index", compact('list'));
    }
    public function trash()
    {
        $list = User::where('status', '=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.user.trash", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = new user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->roles = $request->roles;
        $user->status = $request->status;

        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        return view("backend.user.show", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        return view("backend.user.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->roles = $request->roles;
        $user->status = $request->status;

        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.user.index');
    }

    //status=1->2,2->1
    public function status(string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }

        $user->status = ($user->status == 2) ? 1 : 2;
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.user.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }

        $user->status = 0;
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.user.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }

        $user->status = 2;
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.user.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $user = user::find($id);
        if ($user == null) {
            return redirect()->route('admin.user.index');
        }
        $user->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.user.trash');
    }
}
