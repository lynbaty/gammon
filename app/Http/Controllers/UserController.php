<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::Where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['message' => 'User or password is incorrect'], 404);
        }
        $token = $user->createToken('myToken')->plainTextToken;

        $response = [
            'token' => $token,
            'user' => $user
        ];

        return response($response, 201);
    }

    public function role(Request $request)
    {
        return User::Find(1)->roles()->first();
    }
}
