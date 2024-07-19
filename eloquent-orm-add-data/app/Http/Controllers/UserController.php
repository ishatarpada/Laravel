<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController  extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        $users = User::simplePaginate(5);

        return view('home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser");
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'age' => 'required|numeric',
        ]);

        // Create a new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->save();

        // Redirect with success message
        return redirect()->route('users.index')->with('status', 'New user added successfully');
    }

   
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // $users = User::find($user->id);
        $users = User::findorfail($user->id);

        return view("viewuser", compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view("updateuser", compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // $request->validate([
        //     'name' => 'required|alpha',
        //     'email' => 'required|email',
        //     'city' => 'required|alpha',
        //     'age' => 'required|numeric',
        // ]);


        /*  $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->city = $request->city;
        $users->age = $request->age;
        $users->save(); */

        $users = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'age' => $request->age,
        ]);
        return redirect()->route('users.index')->with('status', 'User Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();

        // User::destroy($id);

        // User::truncate();
        return redirect()->route('users.index')->with('status', 'User Data Deleted successfully');
    }
}
