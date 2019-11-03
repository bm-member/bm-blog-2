<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'title', 'content', 'user_id' ];

    function user() {
        // return $this->belongsTo('App\User', 'user_id', 'id');
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }
}
