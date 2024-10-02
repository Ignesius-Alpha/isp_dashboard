<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Reports.Reports', compact('userName'));
    }
}
