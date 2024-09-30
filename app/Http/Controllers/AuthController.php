<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Auth

    //Login
    public function showLoginForm()
    {
        // dd(Hash::make(12345678)); //password hashed generator
        if (!empty(Auth::check())){
            return redirect('/dashboard');
        }
        return view('Auth.Login');
    }

    public function login(Request $request) {
        //get credentials
        $credentials = [
            'txtUserEmail' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect('/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid user credentials');
    }

    //Forgot Password
    public function showForgotPasswordForm()
    {
        return view('Auth.Forgot-Password');
    }

    public function forgotPassword(Request $request)
    {
        //send email
    }

    // Logout
    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }
}
