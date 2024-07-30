<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table("users")->get();
        return view("index", ["data" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|alpha|max:50',
            'email' => 'required|email|unique:users,email',
            'date' => 'required|date',
            'salary' => 'required|numeric'
        ]);

        // Create a new user record in the database
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'date' => $request->input('date'),
            'salary' => $request->input('salary')
        ]);

        // Redirect to the index route with a success message
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Fetch the user by ID
        $user = User::findOrFail($id);

        // Return the view with the user data
        return view('users.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view("update-info", compact("users"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'salary' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $user->update($request->only(['name', 'email', 'salary', 'date']));

        return redirect()->route('users.index')->with('success', 'User Data updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users.index')->with('success', 'User Data Deleted successfully.');
    }
}
