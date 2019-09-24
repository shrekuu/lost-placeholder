<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return jsonResponse(User::paginate());
    }

    public function show($id)
    {
        return jsonResponse(User::find($id));
    }
}
