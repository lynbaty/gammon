<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'name' => 'required|min:6',
            'password' => 'required|min:6',
            'passwordConfirmed' => 'required|same:password'
        ]);
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        // $user = User::create($validated);
        // $user->password = Hash::make($request->input('password'));
        // User::updated($user);
        // return $user;
    }
    public function logout()
    {
        $user = User::find(auth()->id());
        $user->tokens()->delete();
        return ['messenger' => 'logout'];
    }
}
