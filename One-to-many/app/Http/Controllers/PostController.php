<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*  $post = Post::all();
        return view('post', compact('post')); */

        /* $posts = Post::get();
        return $posts; */

        /* $posts = Post::with('user')->get();
        return $posts; */

        /* $posts = Post::with('user')->get();

        echo $posts->title . "<br>";
        echo $posts->description . "<br>";
        echo $posts->user->name . "<br>";
        echo $posts->user->email . "<br>";

        foreach ($posts as $post) {
            echo "<div style='border:1px solid black ; margin : 10%;padding:20px'>
            <h3>{$post->title}</h3>
            <span>{$post->user->name}</span>
            <p>$post->description</p>
            </div>";
        } */

        // $posts = Post::with('user')->where('title' , 'Education Reforms')->get();
        // return $posts;


        /* $posts = Post::withWhereHas('user', function ($query) {
            $query->where('name', 'Raj');
        })->get();
        return $posts; */

        $users = User::where('name', "Raj")->get();
        $posts = Post::whereBelongsTo($users)->get();

        // return $posts;
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
