<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function login_view() {
        return view("login");
    }

    function register_view() {
        return view("register");
    }

    function logout_process(){
        Auth::logout();
        return Redirect::to('login');
    }
}
