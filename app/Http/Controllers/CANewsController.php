<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CANewsController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.CANews.CAnews', compact('userName'));
    }
}
