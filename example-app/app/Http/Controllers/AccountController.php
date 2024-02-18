<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    function login_view() {
        return view("login");
    }

    function register_view() {
        return view("register");
    }

    function login_process(Request $req){
        $req->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
        ]);

        $data = $req->all();
        // use Illuminate\Support\Facades\Auth;
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return Redirect::to('welcome');
        }else{
            return Redirect::to('login');
        }
    }

    function register_process(Request $req){
        $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        ]);

        $data = $req->all();

        User::create($data);

        return Redirect::to('login');
    }

    function logout_process(){
        Auth::logout();
        return Redirect::to('login');
    }
}
