<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        $data = request()->validate([
            'name' => 'required|min:3|max: 255|unique: users, name',
            'email' => 'required|email|max: 255|unique: users, email',
            'password' => 'required|min:8|max: 255'
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }

    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Welcome Back!');
        }
        return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
