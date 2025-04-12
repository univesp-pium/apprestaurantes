<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function check()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard.index');
        }
        return redirect()->route('admin.auth.login');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function login_action(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('admin.auth.login');
        }

        if (!$user->is_admin) {
            return redirect('web.auth.login');
        }

        if (password_verify($request->password, $user->password)) {
            Auth::login($user);
        }

        return redirect()->route('admin.dashboard.index');
    }

    public function logout_action()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
