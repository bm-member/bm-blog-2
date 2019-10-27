<?php

/* Route::get('home/{name}/{address}',function($name, $address) {
    return "<h1>Welcome $name who live in $address.</h1>";
}); */

/* Route::get('home/{name}/{address}',function($name, $address) {
    return view('home', [
        'name' => $name,
        'address' => $address
    ]);
}); */


/* Route::get('/test', function() {
    for($i=0; $i<5; $i++) {
        $post = new App\Post();
        $post->title = Str::random(10);
        $post->content = Str::random(100);
        $post->user_id = 1;
        $post->save();
    }
}); */

Route::get('/', function() {
    return view('welcome');
});

// Post routes
Route::get('post', 'Backend\PostController@index');
Route::get('/post/create', 'Backend\PostController@create');
Route::post('post', 'Backend\PostController@store');
Route::get('post/{id}/edit', 'Backend\PostController@edit');
Route::post('post/{id}/edit', 'Backend\PostController@update');
Route::get('post/{id}/delete', 'Backend\PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
