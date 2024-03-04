<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    /**
     * Display the dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUrl = URL::current();
        Session::put('url.intended', $currentUrl);

        if (Auth::check()) {
            return view('dashboard.index');
        }

        return redirect()->route('login')
            ->with('error', 'Please login to access the Dashboard.');
    }
}
