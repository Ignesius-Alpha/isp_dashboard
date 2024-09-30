<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoverageController extends Controller
{
    //
    public function index(){
        return view('Dashboard.Coverage.Coverage');
    }
}
