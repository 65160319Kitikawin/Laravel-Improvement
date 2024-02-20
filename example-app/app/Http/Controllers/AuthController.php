<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    function register_view(){
        return view('Auth.register');
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

    function login_view(){
        return view('Auth.login');
    }

    function login_process(Request $req){
        $req->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
        ]);

        $data = $req->all();
        
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return Redirect::to('customers');
        }else{
            return Redirect::to('login')->withErrors(['login' => 'Invalid email or password. Please try again.']);
        }
    }

    function logout_process(){
        Auth::logout();
        return Redirect::to('login');
    }
}
