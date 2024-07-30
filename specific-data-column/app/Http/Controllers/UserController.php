<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $user = User::get();
        return $user; */

        /* $user = User::select("name" , "city")->get();
        return $user; */

        /* $user = User::select("name", "city")
            ->where("city", "Delhi")
            ->get();
        return $user; */

        /*  $user = User::where("city", "Delhi")
            ->get(["name" , "email" , "city"]);
        return $user; */

        /* $user = User::get(["name", "email", "city"]);
        return $user; */


        /* $user = User::where("city", "Delhi")
            ->get();
        return $user; */

        /*  $user = User::all("name" , "email" , "city")->toArray();
        return $user; */

        /*  $user = User::pluck("email", "name");
        return $user; */

        /* $user = User::find(1);
        return $user; */

        /* $user = User::find(1, ['name', 'email']);
        return $user; */

        /*  $user = User::find(1)->name;
        return $user; */

        /*  $user = User::findorfail(1, ['name', 'email']);
        return $user; */

        /* $user = User::where("city" , "delhi")->value('name');
        return $user; */

        /* $user = User::where("city" , "delhi")->value('email');
        return $user; */

        /* $user = Post::select("title" , "description" , "user_id")->with("user")->get();
        return $user; */

        /*  $user = Post::with("user")->get(["title" , "description" , "user_id"]);
        return $user; */

        /* $user = Post::with("user:name,email,id")->get(["title" , "description" , "user_id"]);
        return $user; */

        /* $user = Post::with("user:name as UserName,email as UserEmail,id")->get(["title", "description", "user_id"]);
        return $user; */

        /*  $user = Post::with(["user" => function ($query) {
            $query->select(" id", "name", "email");
        }])
            ->get(["title", "description", "user_id"]);
        return $user; */

        /*   $user = Post::select(["title", "description", "user_id"])->with(
            [
                "user" => function ($query) {
                    $query->select(" id", "name", "email");
                },
                "comments" => function ($query) {
                    $query->select("post_id", "details");
                }
            ]
        )->get();
        return $user; */

        /* $user = Post::with("user")
            ->get();
        return $user; */

        /* $post = User::with("post")
            ->get();
        return $post; */

        /*  $user = Post::get();
        return $user; */

        /* $post = User::get();
        return $post; */

        /* $user = Post::without("user")
            ->get();
        return $user; */
 
        /*$post = User::without("post")
            ->get();
        return $post; */

        /* $user = Post::withOnly("user")
            ->get();
        return $user; */
 
        /*$post = User::withOnly("post")
            ->get();
        return $post; */

        $user = User::all();
        $user->load("post");
        return $user;
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
