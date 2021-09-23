<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function PostDetail(){

        return $this->belongsTo(PostDetail::class);
    }


    protected $fillable = [  
        'author',
        'content',
        'img_path'
    ];
}
