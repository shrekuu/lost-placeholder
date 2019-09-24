<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->select(['title', 'cover'])->paginate();
        return jsonResponse($posts);
    }

    public function show($id)
    {
        $post = Post::with('user')->find($id);
        return jsonResponse($post);
    }
}
