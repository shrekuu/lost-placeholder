<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }
}
