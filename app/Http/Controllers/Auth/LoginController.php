<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

public function login(Request $request)
{
    $login = $request->input('login');
    $password = $request->input('password');

    // Detectar si es correo o nickname
    $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'nickName';

    if (Auth::attempt([$field => $login, 'password' => $password])) {
        session()->flash('show_loader', true);
        return redirect()->intended('/administradorSiquirres52');
    }

    return back()->withErrors([
        'login' => 'Credenciales inválidas.',
    ])->withInput();
}

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

