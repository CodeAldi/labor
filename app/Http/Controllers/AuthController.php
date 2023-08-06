<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    function LoginPage() : View {
        // render atau menampilkan halaman login
        return view('auth.login',['page'=>'login-page']);
    }
}
