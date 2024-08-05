<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // validate user using validator
        $validUser = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:4|max:12',
            ]
        );

        // if validation is failed then send response data
        if ($validUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Validation Error",
                'errors' => $validUser->errors()->all()
            ], 401);
        }

        // if validation not failed then send the data to database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // and response the data
        return response()->json([
            'status' => true,
            'message' => "User Created Successfully",
            'user' => $user,
        ], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $user,
            ], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();


        return response()->json([
            'status' => true,
            'user' => $user,
            'message' => "User Logged Out Successfully",
        ], 200);
    }
}
