<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Topic::where('status', '!=', 0)
            ->select('id', 'name', 'slug', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.topic.index", compact('list'));
    }

    public function trash()
    {
        $list = Topic::where('status', '=', 0)
            ->select('id', 'name', 'slug', 'status')
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.topic.trash", compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic();

        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->slug = Str::of($request->name)->slug('-');

        $topic->status = $request->status;

        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.topic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }
        return view("backend.topic.show", compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }

        $list = topic::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.topic.edit", compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }

        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->slug = Str::of($request->name)->slug('-');

        $topic->status = $request->status;

        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.topic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //status=1->2,2->1
    public function status(string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }

        $topic->status = ($topic->status == 2) ? 1 : 2;
        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.topic.index');
    }
    //đưa vào trash:  status=0
    public function delete(string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }

        $topic->status = 0;
        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.topic.index');
    }
    //Khôi phục về danh sách 
    public function restore(string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }

        $topic->status = 2;
        $topic->created_at = date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.topic.trash');
    }

    //Xóa vĩnh viễn
    public function destroy(string $id)
    {
        $topic = topic::find($id);
        if ($topic == null) {
            return redirect()->route('admin.topic.index');
        }
        $topic->delete(); //xóa

        //chuyen huong trang
        return redirect()->route('admin.topic.trash');
    }
}
