<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StoreTopicRequest;
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
            ->orderby('created_at', 'asc')
            ->get();
        return view("backend.topic.index", compact('list'));
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
