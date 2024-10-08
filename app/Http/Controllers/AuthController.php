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
        $credentials = [
            'txtUserEmail' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            $userID = $user->pkiUserID;
            
            if ($user->blnActive == 1) {
                $logAction = 'User logged in successfully';

                DB::statement('CALL sp_AddActivityLog(?, ?)', [
                    $userID,
                    $logAction
                ]);

                session(['userName' => $user->txtUserFirstname . ' ' . $user->txtUserSurname]);

                return redirect('/dashboard');
            } else {
                Auth::logout();
                $logAction = 'User tried logging in with an inactive/suspended account.';
                DB::statement('CALL sp_AddActivityLog(?, ?)', [
                    $userID,
                    $logAction
                ]);
                return redirect()->back()->with('error', "Your account is inactive/suspended. Please contact your admin.");
            }
        }

        return redirect()->back()->with('error', 'Invalid user credentials');
    }


    public function showForgotPasswordForm()
    {
        return view('Auth.Forgot-Password');
    }

    public function forgotPassword(Request $request) {}

    public function showResetPasswordForm(Request $request)
    {
        return view('Auth.Reset-Password');
    }

    public function resetpassword(Request $request) {}

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
