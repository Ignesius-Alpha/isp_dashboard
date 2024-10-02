<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ISPController extends Controller
{
    public function index(){
        $userName = session('userName');
        return view('Dashboard.ISP.ISP', compact('userName'));
    }
}
