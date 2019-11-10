<?php

use Illuminate\Http\Request;
use App\Post;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('post', function() {
    $posts = Post::orderBy('id', 'desc')->paginate(6);
    return response()->json(compact('posts'));
});

Route::get('post/{id}', function($id) {

    $post = Post::find($id);

    if($post) {
        return response()->json([
           'post' => $post
        ]);
    }

    return response()->json([
        'msg' => 'A post does not exists.'
    ], 404);
});

Route::post('post', function(Request $req) {
    $post = new Post();
    $post->title = $req->title;
    $post->content = $req->content;
    $post->user_id = 1;
    $post->save();

    return response()->json([
        'msg' => 'A post was created successfully.'
    ]);
});

Route::put('post/{id}', function(Request $req, $id) {


    $post = Post::find($id);

    if($post) {
        $post->update($req->all());
        $post->save();

        return response()->json([
            'msg' => 'A post was updated successfully.'
        ]);
    } 

    return response()->json([
        'msg' => 'A post does not exists.'
    ], 404);
    
});

Route::delete('post/{id}', function($id) {
    $post = Post::find($id);

    if($post) {
        $post->delete();
        return response()->json([
            'msg' => 'A post was deleted successfully.'
        ]);
    }

    return response()->json([
        'msg' => 'A post does not exists.'
    ], 404);
});