<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    function loginAttempt(Request $request){
        $user_name = $request->user_name;
        $password = $request->password;
        if (!Auth::attempt(['user_name' => $user_name, 'password' => $password])) {
            return response()->json([
                'errors' => 'Invalid Credentials'
            ]);
        }
        $user = User::where('user_name', $user_name)->first();
        $authToken = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'access_token' => $authToken
        ]);
    }   
}
