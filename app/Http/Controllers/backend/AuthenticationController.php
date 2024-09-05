<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function register()
    {
        return view('backend.auth.sign-up');
    }
}
