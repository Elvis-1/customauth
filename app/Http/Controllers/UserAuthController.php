<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function create(Request $request){
            //   return $request->input();

            // request validation
            $request->validate([
           'name'=> 'required',
           'email'=> 'required|email|unique:users',
           'password'=> 'required}min:5|max:12'
            ]);
    }
}
