<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = User::where('status', '!=', 0)
            ->orderby('created_at', 'asc')
            ->get();
        return view("backend.user.index", compact('list'));
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
        // //upload img
        // if ($request->image) {
        //     $exten = $request->file("image")->extension();
        //     if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
        //         $filename = $user->phone . "." . $exten;
        //         $request->image->move(public_path("images/users"), $filename);
        //         $user->image = $filename;
        //     }
        // }
        // //end upload img

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
