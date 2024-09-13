<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;

class AuthController extends Controller
{
    public function login(Request $req){
         // Request Validation
         $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::where('email', $req->email)->first();

        if (!$admin || !Hash::check($req->password, $admin->password)) {
            return response()->json([
                'message' => 'Invalid email or password.'
            ], 401);
        }

        // // Generate an API token if needed (for stateless authentication)
        // $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'route' => route('home'),
            // 'access_token' => $token,
            // 'token_type' => 'Bearer',
        ], 200);
    }
}
