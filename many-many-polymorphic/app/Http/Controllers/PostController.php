<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /* Display a listing of the resource */
    public function index()
    {
        /* $post = Post::with('tags')->get();
        return $post; */

        /* $post = Post::with('tags')->find(1);
        return $post; */

        $posts = Post::with('tags')->get();
        foreach ($posts as $post) {
            echo "<h2>$post->title</h2>";
            echo "<p>$post->description</p>";
            foreach ($post->tags as $tag) {
                echo "<span>$tag->tag_name / </span>";
            }
            echo "<hr>";
        }
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        /* $post = Post::create([
            "title" => "News Title One",
            "description" => "News One Description"
        ]);
        $post->tags()->create([
            "tag_name" => "Sports",
        ]); */


        /* $post = Post::create([
            "title" => "News Title Four",
            "description" => "News Four Description"
        ]);
        $post->tags()->attach(5); */


        $post = Post::find(3);
        $post->tags()->attach([2, 6]);
    }

    /* Store a newly created resource in storage */
    public function store(Request $request)
    {
        //
    }

    /* Display the specified resource */
    public function show(string $id)
    {
        //
    }

    /* Show the form for editing the specified resource */
    public function edit(string $id)
    {
        //
    }

    /* Update the specified resource in storage */
    public function update(Request $request, string $id)
    {
        //
    }

    /* Remove the specified resource from storage */
    public function destroy(string $id)
    {
        //
    }
}
