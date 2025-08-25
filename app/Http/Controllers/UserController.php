<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function register(){
        return view('admin.signup');
    }

    public function lostPassword(){
        return view('admin.forgotpassword');
    }
}

