<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
     * Display the user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $currentUrl = URL::current();
        Session::put('url.intended', $currentUrl);

        if (Auth::check()) {
            return view('user.profile');
        }

        return redirect()->route('login')
            ->with('error', 'Please login to access the Profile.');
    }
}
