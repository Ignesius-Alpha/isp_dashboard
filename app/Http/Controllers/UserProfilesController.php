<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfilesController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.UserProfiles.UserProfiles', compact('userName'));
    }

    public function updateUser(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.UserProfiles.UserProfileUpdate', compact('userName'));
    }

    public function createUser(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.UserProfiles.UserProfileCreate', compact('userName'));
    }
}
