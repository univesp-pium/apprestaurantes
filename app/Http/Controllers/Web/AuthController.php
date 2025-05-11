<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('client')->check()) {
            return redirect()->route('client-area.dashboard.index');
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
            return redirect()->route('client-area.dashboard.index');
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
        if (Auth::guard('client')->check()) {
            sweetalert()->success('Faça logout antes de tentar se registrar');
            return redirect()->route('client-area.dashboard.index');
        }

        return view('web.auth.register');
    }
    public function register_action(Request $request)
    {
        $data = $request->all();
        $errors = [];

        try {
            $client = Client::create($data);
            Auth::guard('client')->login($client);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
            if (app()->environment('local')) {
                (env('APP_DEBUG') == 'true' && env('APP_ENV') == 'local') ? dd($th) : Log::error($th);
            }
        }

        if (count($errors) == 0) {
            sweetalert()->success('Bem vindo a sua conta! Cadastre seu endereço!');
            return redirect()->route('client-area.addresses.index');
        } else {
            sweetalert()->error('Não foi possível atualizar o registro!');
            return redirect()->back();
        }
    }
}
