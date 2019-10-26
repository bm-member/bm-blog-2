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

Route::get('page/{name}/{address}', 'PageController@page');

// Post routes
Route::get('post/all', 'PostController@view');
Route::get('post/show/{id}', 'PostController@show');
Route::get('post/save', 'PostController@store');
Route::get('post/update/{id}', 'PostController@update');
Route::get('post/delete/{id}', 'PostController@destroy');

