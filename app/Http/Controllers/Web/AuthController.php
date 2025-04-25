<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('client')->check()) {
            return redirect()->route('dashboard.index');
        }
        return view('web.auth.login');
    }

    public function login_action(Request $request)
    {
        $client = Client::where('email', $request->email)->first();


        if (!$client) {
            return redirect()->route('auth.login');
        }

        if (password_verify($request->password, $client->password)) {
            Auth::guard('client')->login($client);
            sweetalert()->success('Login efetuado com sucesso!');
            return redirect()->route('dashboard.index');
        }

        return redirect()->back();
    }

    public function logout_action()
    {
        Auth::guard('client')->logout();
        return redirect('/');
    }

    public function register()
    {
        return view('web.auth.register');
    }
    public function register_action(Request $request)
    {
        $data = $request->all();
        $errors = [];

        try {
            Client::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
            if (app()->environment('local')) {
                dd($th);
            }
        }

        if (count($errors) == 0) {
            sweetalert()->success('Conta criada com successo!');
            return redirect()->back();
        } else {
            sweetalert()->error('Não foi possível atualizar o registro!');
            return redirect()->back();
        }
    }
}
