<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Marketing.Marketing', compact('userName'));
    }
}
