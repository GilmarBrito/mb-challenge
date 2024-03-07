<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
}
