<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Support.Support', compact('userName'));
    }
}
