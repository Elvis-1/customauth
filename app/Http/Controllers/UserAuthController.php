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
        

    public function check(Request $request){
            //  return $request->input();
            // validate request

            $request->validate([
              'email'=>'required|email',
              'password' => 'required|min:5|max:12'

            ]);

            // if validates successfully, process login

            $user = User::where('email', '=', $request->email)->first();

            if($user){
               if(Hash::check($request->password, $user->password)){
                    // if password match, redirect user to profile
                    $request->session()->put('LoggedUser', $user->id);
                    return redirect('profile');
               }else{
                     return back()->with('fail', 'invalid password');
               }
            }else{
                return back()->with('fail', 'No account exist for this email');
            }

            
    }

    public function profile(){

        if(session()->has('LoggedUser')){
            $user = User::where('id', '=', session('LoggedUser'))->first();

            $data = [
                'LoggedUserInfo' => $user 
            ];
        }
        return view('admin.profile', $data);
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

}
