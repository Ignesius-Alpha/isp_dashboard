<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.CompanyProfile.CompanyProfile', compact('userName'));
    }
}
