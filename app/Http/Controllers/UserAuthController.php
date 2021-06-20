<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;
use App\Models\User;

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
           'password'=> 'required|min:5|max:12'
            ]);
          
            // if form is validated successfully, then register users

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $query = $user->save();

            if($query){
                return back()->with('success', 'You have been registered successfully');
            }else{
                return back()->with('failed', 'Something went wrong');
            }
    }
        

    public function check(Reuest $request){
            //  return $request->input();
            // validate request

            $request->validate([
              'email'=>'required|email',
              'password' => 'required|min:5|max:12'

            ]);
    }

}
