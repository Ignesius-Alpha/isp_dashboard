<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoverageController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Coverage.Coverage', compact('userName'));
    }
}
