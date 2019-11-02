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
Route::group(['prefix' => 'admin', 'middleware' => 'authware', 'namespace' => 'Backend'], function() {
    Route::get('post', 'PostController@index');
    Route::get('post/create', 'PostController@create');
    Route::post('post', 'PostController@store');
    Route::get('post/{id}/edit', 'PostController@edit');
    Route::post('post/{id}/edit', 'PostController@update');
    Route::get('post/{id}/delete', 'PostController@destroy'); 
});

// User
Route::group(['prefix' => 'admin', 'middleware' => 'authware', 'namespace' => 'Backend'], function() {
    Route::get('/profile', 'UserController@profile');
});


/* Route::get('admin/post', 'Backend\PostController@index');
Route::get('/admin/post/create', 'Backend\PostController@create');
Route::post('admin/post', 'Backend\PostController@store');
Route::get('admin/post/{id}/edit', 'Backend\PostController@edit');
Route::post('admin/post/{id}/edit', 'Backend\PostController@update');
Route::get('admin/post/{id}/delete', 'Backend\PostController@destroy'); */

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

/* 
Route::get('/test', function() {
    Auth::user();
   
    dd(auth()->user()->name);
}); */


/* Route::get('/test', function() {

    for($i=1; $i<=50; $i++) {
        $post = new App\Post();
        $post->title = str_random(10);
        $post->content = str_random(200);
        $post->user_id = 1;
        $post->save();
    }
    
}); */



