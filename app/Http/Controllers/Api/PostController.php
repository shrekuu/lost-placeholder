<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->paginate();
        return jsonResponse($posts);
    }

    public function show($id)
    {
        $post = Post::with('author')->find($id);
        return jsonResponse($post);
    }
}
