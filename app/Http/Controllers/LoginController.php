<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('user.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email:dns',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email Harus Diisi',
                'password.required' => 'Kata Sandi Harus Diisi',
            ]
        );


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('Index');
        }

        return back()->with('LoginError', 'Login Gagal, Email atau Kata Sandi Salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
