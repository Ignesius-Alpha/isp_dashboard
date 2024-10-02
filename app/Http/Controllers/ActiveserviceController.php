<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveserviceController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Activeservices.Activeservices', compact('userName'));
    }
}
