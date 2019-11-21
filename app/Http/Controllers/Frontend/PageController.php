<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PageController extends Controller
{
    public function home() 
    {
        $posts = Post::latest()->paginate(5);
        return view('frontend.index', compact('posts'));
    }

    public function postDetail($id)
    {
        $post = Post::find($id);
        $posts = Post::latest()->take(4)->get();
        return view('frontend.post_detail', compact('post', 'posts'));
    }

    public function about() 
    {
        return view('frontend.about');
    }

    public function contact() 
    {
        return view('frontend.contact');
    }
}
