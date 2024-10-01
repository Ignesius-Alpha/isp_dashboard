<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfilesController extends Controller
{
    //
    public function index(){
        return view('Dashboard.RightPanel.UserProfiles.UserProfiles');
    }

    public function updateUser(){
        return view('Dashboard.RightPanel.UserProfiles.UserProfileUpdate');
    }

    public function createUser(){
        return view('Dashboard.RightPanel.UserProfiles.UserProfileCreate');
    }
}
