<?php

use App\Post;
// Testing Routes
// require 'test.php';

// Frontend Routes
Route::get('/', 'Frontend\PageController@home');
Route::get('/post/{id}', 'Frontend\PageController@postDetail');
Route::get('/about', 'Frontend\PageController@about');
Route::get('/contact', 'Frontend\PageController@contact');

// Backend Routes
Route::group(['prefix' => 'admin', 'middleware' => ['authware', 'can:isAdminOrAuthor'], 'namespace' => 'Backend'], function() {
    // Post routes
    Route::get('post', 'PostController@index');
    Route::get('post/create', 'PostController@create');
    Route::post('post', 'PostController@store');
    Route::get('post/{id}/edit', 'PostController@edit');
    Route::post('post/{id}/edit', 'PostController@update');
    Route::get('post/{id}/delete', 'PostController@destroy'); 
    Route::get('post/{id}', 'PostController@show');

    // User Routes
    Route::get('/profile', 'UserController@profile');
    Route::get('/profile/edit', 'UserController@edit');
    Route::post('/profile/edit', 'UserController@update');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');




