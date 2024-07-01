<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showHome()
    {
        // return "<h1>Welcome to Controller Pages</h1>";
        return view('welcome');
    }

    public function showUser(string $id)
    {
        // return "<h1>Welcome to Controller Pages</h1>";
        // return view('users' , ['id' => $id]);
        return view('users' , compact('id'));
    }

    public function showBlog()
    {
        return view('blog');
    }
}
