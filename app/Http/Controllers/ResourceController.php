<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Resources.Resources', compact('userName'));
    }
}
