<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Login
    public function showLoginForm()
    {
        // dd(Hash::make(12345678)); //password hashed generator
        if (!empty(Auth::check())) {
            return redirect('/dashboard');
        }
        return view('Auth.Login');
    }

    public function login(Request $request)
    {
        // Get credentials
        $credentials = [
            'txtUserEmail' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            $userID = $user->pkiUserID;
            $logAction = 'User logged in successfully';

            DB::statement('CALL sp_AddActivityLog(?, ?)', [
                $userID,
                $logAction
            ]);

            session(['userName' => $user->txtUserFirstname . ' ' . $user->txtUserSurname]);

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
    public function logout()
    {
        $userID = Auth::id();
        $logAction = 'User logged out';

        DB::statement('CALL sp_AddActivityLog(?, ?)', [
            $userID,
            $logAction
        ]);
        Auth::logout();
        return redirect(url(''));
    }
}
