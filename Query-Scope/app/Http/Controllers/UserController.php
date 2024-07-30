<?php

namespace App\Http\Controllers;

use App\Models\Scopes\UserScope;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /* LOCAL SCOPE */


        /*  $user = User::with('post')->where('status' , 1)->get();
       return $user; */

        /* $user = User::with('post')->whereCity('pune')->where('status' , 1)->get();
       return $user; */

        /*$user = User::with('post')->active()->get();
       return $user; */

        /* $user = User::with('post')->city('pune')->active()->get();
       return $user; */

        /*  $user = User::with('post')->city(['pune' , 'mumbai'])->active()->get();
       return $user; */

        /* $user = User::with('post')->city(['pune' , 'mumbai'])->active()->sort()->get();
       return $user; */

        /* $user = User::with('post')->active()->sort()->get();
       return $user; */

        /* --------------------------------------------------------------------------------- */

        /* GLOBAL SCOPE METHOD 1*/


        /* $user = User::with('post')->sort()->get();
        return $user; */

        /*  $user = User::select('id', 'name', 'email')->with('post:title,description,user_id')->sort()->get();
        return $user; */


        /* GLOBAL SCOPE METHOD 2*/

        /* $user = User::sort()->get();
        return $user; */

        /* --------------------------------------------------------------------------------- */

        /* remove Scope */

        /* $user = User::withoutGlobalScope(UserScope::class)->get();
        return $user;  */


        $user = User::withoutGlobalScope(UserScope::class)->with('post:title,description,user_id')->sort()->get();
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
