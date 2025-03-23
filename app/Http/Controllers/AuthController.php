<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect('/login');
        }

        if (password_verify($request->password, $user->password)) {
            auth()->login($user);
        }

        return redirect('/');
    }

    public function logout_action()
    {
        auth()->logout();
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function register_action(Request $request)
    {
        dd($request->all());
        return view('auth.register');
    }
}
