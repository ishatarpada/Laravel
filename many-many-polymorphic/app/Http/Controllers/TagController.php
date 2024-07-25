<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $tag = Tag::with("posts")->with("videos")->find(2);
        return $tag; */

        /*  $tag = Tag::with("posts","videos")->find(2);
        return $tag; */

        /* $tag = Tag::with(["posts::title,description", "videos"])->find(2);
        return $tag; */

        /* // Retrieve the tag with related posts and videos
        $tag = Tag::with('posts', 'videos')->find(2);

        if ($tag) {
            // Display all posts related to the tag
            echo "<h1>All Posts:</h1>";

            if ($tag->posts->isNotEmpty()) {
                foreach ($tag->posts as $post) {
                    echo "<h2>{$post->title}</h2>";
                    echo "<p>{$post->description}</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No posts available for this tag.</p>";
            }

            // Display all videos related to the tag
            echo "<h1>All Videos:</h1>";

            if ($tag->videos->isNotEmpty()) {
                foreach ($tag->videos as $video) {
                    echo "<h2>{$video->title}</h2>";
                    echo "<p>{$video->url}</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No videos available for this tag.</p>";
            }
        } else {
            echo "<p>Tag not found.</p>";
        } */

        // Retrieve all tags with related posts and videos
        $tags = Tag::with('posts', 'videos')->get();

        // Check if tags are retrieved
        if ($tags->isNotEmpty()) {
            foreach ($tags as $tag) {
                // Display tag name (optional)
                echo "<h1>Tag: {$tag->name}</h1>";

                // Display all posts related to the tag
                echo "<h2>All Posts:</h2>";

                if ($tag->posts->isNotEmpty()) {
                    foreach ($tag->posts as $post) {
                        echo "<h3>{$post->title}</h3>";
                        echo "<p>{$post->description}</p>";
                        echo "<hr>";
                    }
                } else {
                    echo "<p>No posts available for this tag.</p>";
                }

                // Display all videos related to the tag
                echo "<h2>All Videos:</h2>";

                if ($tag->videos->isNotEmpty()) {
                    foreach ($tag->videos as $video) {
                        echo "<h3>{$video->title}</h3>";
                        echo "<p>{$video->url}</p>";
                        echo "<hr>";
                    }
                } else {
                    echo "<p>No videos available for this tag.</p>";
                }

                echo "<br><hr><br>";
            }
        } else {
            echo "<p>No tags found.</p>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
