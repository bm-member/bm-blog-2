<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('id', 'desc')->get();
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('backend.post.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = 1;
        $post->save();
        return redirect('admin/post')->with('status', 'Created post successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('backend.post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = 1;
        $post->save();
        return redirect('admin/post')->with('status', 'Updated post successfully.');
    }

    public function destroy($id)
    {
        // $post = Post::where('id', $id)->first();
        // $post = Post::find($id);
        $post = Post::findOrFail($id); // with error checking
        $post->delete();
        return redirect('admin/post')->with('status', 'Deleted post successfully.');
    }
}
