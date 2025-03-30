<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('web.auth.login');
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
        return view('web.auth.register');
    }
    public function register_action(Request $request)
    {
        dd($request->all());
        return view('web.auth.register');
    }
}
