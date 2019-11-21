


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

/* Route::get('admin/post', 'Backend\PostController@index');
Route::get('/admin/post/create', 'Backend\PostController@create');
Route::post('admin/post', 'Backend\PostController@store');
Route::get('admin/post/{id}/edit', 'Backend\PostController@edit');
Route::post('admin/post/{id}/edit', 'Backend\PostController@update');
Route::get('admin/post/{id}/delete', 'Backend\PostController@destroy'); */

/* 
Route::get('/test', function() {
    Auth::user();
   
    dd(auth()->user()->name);
}); */


Route::get('/test', function() {

    // unlink(public_path('upload/profile/1573274302.png'));

    // echo time();

  /*  echo asset('');

   echo '<br>';

   echo public_path(); */
    
});
