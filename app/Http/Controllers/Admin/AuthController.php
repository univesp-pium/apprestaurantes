<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard.index');
        }
        return view('admin.auth.login');
    }

    public function login_action(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('admin.auth.login');
        }

        if (password_verify($request->password, $user->password)) {
            Auth::guard('admin')->login($user);
            sweetalert()->success('Login efetuado com sucesso!');
            return redirect()->route('admin.dashboard.index');
        }

        return redirect()->back();
    }

    public function logout_action()
    {
        Auth::guard('admin')->logout();
        sweetalert()->success('Login efetuado com sucesso!');
        return redirect()->route('admin.auth.login');
    }

    public function check()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard.index');
        }
        return view('admin.auth.login');
    }
}
