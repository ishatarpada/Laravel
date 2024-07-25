<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $video = Video::find(1);
        return $video->comments; */

        /* $video = Video::find(1);
        foreach ($video->comments as $comment) {
            echo "<li>{$comment->detail}</li><hr>";
        } */


        /* $video = Video::with("comments")->find(1);
        echo "<h1>$video->title</h1>";
        echo "<h4>$video->url</h4>";
        foreach ($video->comments as $comment) {
            echo "<li>{$comment->detail}</li><hr>";
        } */

        /* $video = Video::with('latestComment')->find(1);
        return $video; */

        /* $video = Video::with('oldestComment')->find(1);
        return $video; */

        /* $video = Video::with('bestComment')->find(1);
        return $video; */

        /* $video = Video::with('leastComment')->find(1);
        return $video; */

        /* $video = video::find(1);
        return $video->bestComment(); */

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video = Video::find(1);

        $video->comments()->create([
            'detail' => "Concept is good"
        ]);
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
