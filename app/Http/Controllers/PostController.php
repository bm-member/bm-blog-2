<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function view()
    {
        $posts = Post::all();
        return view('post.view', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        return view('post.show', compact('post'));
    }

    public function store()
    {
        $post = new Post();
        $post->title = 'Post Two';
        $post->content = 'A migration class contains two methods: up and down. The up method is used to add new tables, columns, or indexes to your database, while the down method should reverse the operations performed by the up method.';
        $post->user_id = 1;
        $post->save();
        return redirect('post/all');
    }

    public function update($id)
    {
        $post = Post::where('id',$id)->first();
        if($post) {
            $post->title = 'Post update';
            $post->content = 'A migration class contains two methods: up and down. The up method is used to add new tables, columns, or indexes to your database, while the down method should reverse the operations performed by the up method.';
            $post->user_id = 1;
            $post->save();
        }
        return redirect('post/all');
    }

    public function destroy($id)
    {
        $post = Post::where('id',$id)->first();
        if($post) {
            $post->delete();
        }
        return redirect('post/all');
    }
}
