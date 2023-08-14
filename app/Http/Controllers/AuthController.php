<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    function LoginPage() : View {
        // render atau menampilkan halaman login
        return view('auth.login',['page'=>'login-page']);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd('masuk');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin.dashboard.home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
