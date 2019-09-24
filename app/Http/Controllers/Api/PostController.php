<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select(['id', 'title', 'cover', 'user_id'])->paginate();
        return jsonResponse($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return jsonResponse($post);
    }
}
