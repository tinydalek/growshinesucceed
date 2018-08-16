<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    // Attributes that are mass assignable

    protected $fillable = [
        'title',
        'body',
        'author',
        'published_on'
    ];
}
