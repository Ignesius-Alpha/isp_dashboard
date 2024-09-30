<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CANewsController extends Controller
{
    //
    public function index(){
        return view('Dashboard.CANews.CAnews');
    }
}
