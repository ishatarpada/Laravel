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
        /* $user = User::with('post')->get();
        return $user; */

        $user = User::with('post')->find(10);
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* $user = User::find(10)->delete();
        Post::where('user_id' , 10)->delete(); */

        /* $user = User::find(10)->delete(); */

        $user = User::find(9)->delete();
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
