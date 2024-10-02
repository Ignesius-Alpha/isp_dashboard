<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $userName = session('userName');
        return view('Dashboard.Dashboard.Dashboard', compact('userName'));
    }
}
