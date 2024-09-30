<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ISPController extends Controller
{
    public function index(){
        return view('Dashboard.ISP.ISP');
    }
}
