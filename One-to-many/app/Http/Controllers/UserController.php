<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /* Display a listing of the resource */
    public function index()
    {
        // $users = User::get();
        // return $users;

        // $users = User::with('post')->get();
        // return $users;

        // $users = User::with('post')->find(2);
        // return $users;

        // $users = User::find(2);
        // $posts = $users->post;
        // return $users;

        // $users = User::doesntHave("post")->get();
        // return $users;

        // $users = User::has("post")->with('post')->get();
        // return $users;

        // $users = User::has("post", '>=', 3)
        //     ->with('post')
        //     ->get();
        // return $users;

        // $users = User::withCount("post")
        //     ->get();
        // return $users;

        $users = User::select('name', 'email')->withCount("post")->get();
        return $users;

        // $users = User::all();
        // return view('user', compact('users'));
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        /* $post = new Post([
            'title' => "news Test",
            'description' => "Just Testing ...."
        ]);

        $user = User::find(2);

        $user->post()->save($post); */

        /* $user = User::find(2);

        $user->post()->create([
            'title' => "news title Test",
            'description' => "Just Testing description ...."
        ]); */

        $user = User::find(5);

        $user->post()->createMany([
            [
                'title' => "news title ",
                'description' => "Just description ...."
            ],
            [
                'title' => "news title one",
                'description' => "Just description testing...."
            ]
        ]);
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
