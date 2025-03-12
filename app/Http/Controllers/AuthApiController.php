<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid credentials',
                'debug' => [
                    'email' => $request->email,
                    'password' => $request->password,
                    'hash_in_db' => $user->password
                ]
            ], 401);
        }

        $user = Auth::user(); // Ambil user setelah login
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
