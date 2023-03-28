<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required||min:8'
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }

    public function login()
    {

    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
