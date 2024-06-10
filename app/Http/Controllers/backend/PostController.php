<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::where('status', '!=', 0)
            ->orderby('created_at', 'desc')
            ->get();
        return view("backend.post.index", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Post::where('status', '!=', 0)
            ->orderby('created_at', 'asc')
            ->get();
        $list_topic = Topic::where('status', '!=', 0)
            ->select('id', 'name')
            ->orderby('created_at', 'desc')
            ->get();
        $htmltopic = "";
        foreach ($list_topic as $item) {
            $selected = old('category_id') == $item->id ? 'selected' : '';
            $htmltopic .= "<option value='" . $item->id . "'$selected>" . $item->name . "</option>";
        }
        return view("backend.post.create", compact('list', 'htmltopic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();

        $post->topic_id = $request->topic_id;
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->type = $request->type;
        $post->description = $request->description;
        $post->slug = Str::of($request->title)->slug('-');
        //upload img
        if ($request->image) {
            $exten = $request->file("image")->extension();
            if (in_array($exten, ['jpg', 'png', 'gif', 'webp'])) {
                $filename = $post->slug . "." . $exten;
                $request->image->move(public_path("images/posts"), $filename);
                $post->image = $filename;
            }
        }
        //end upload img

        $post->status = $request->status;

        $post->created_at = date('Y-m-d H:i:s');
        $post->created_by = Auth::id() ?? 1;
        $post->save(); //luu

        //chuyen huong trang
        return redirect()->route('admin.post.index');
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
