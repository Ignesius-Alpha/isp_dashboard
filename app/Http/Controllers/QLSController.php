<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLSController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Linksearch.Linksearch', compact('userName'));
    }
}
