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
                'errors' => 'Wrong credentials'
            ], 422);
        }
        $user = User::where('user_name', $user_name)->first();
        
        if(!$user->is_admin){
            return response()->json([
                'errors' => 'This user is not an admin'
            ], 422);
        }

        $authToken = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'access_token' => $authToken
        ]);
    }   

    function logoutAttempt(Request $request){
        $user = User::where('id', $request->id)->first();
        try{
            $user->tokens()->delete();
        }catch( Exception $e){
            return response()->json(['error' => $e], 500);
        }
        return response()->json(['message' => 'success'], 200);
    }
}
