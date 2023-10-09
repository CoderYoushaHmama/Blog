<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //register function
    public function register(RegisterRequest $request){
        $name = $request->input('name');
        $email = $request->input('email-address');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm-password');

        if($password != $confirm_password){
            return redirect()->back()->with('password_error','error in password');
        }

        User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password)
        ]);
        
        if(Auth::guard('user')->attempt(['email'=>$email,'password'=>$password])){
            $user = Auth::guard('user')->user();
            $request->session()->put('user',$user);
            return redirect()->route('blog');
        }
    }

    //login function
    public function login(LoginRequest $request){
        $email = $request->input('email-address');
        $password = $request->input('password');

        if(Auth::guard('user')->attempt(['email'=>$email,'password'=>$password], $request->remember)){
            return redirect()->route('blog');
        }else{
            return redirect()->back()->with('login_error','error in email or password');
        }
    }

    //logout function
    public function logout(){
        Auth::guard('user')->logout();
        return redirect()->route('visitor');
    }
}