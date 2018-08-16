<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    
public function blog() {
    
    $blogposts = BlogPost::all();

    return view('blogposts.blog', compact('blogposts'));
    
}

public function show($id) {

    $blogpost = BlogPost::findorfail($id);

    return view('blogposts.showpost', compact('blogpost'));

}

public function newpost() {

    return view('blogposts.newpost');

}

}
