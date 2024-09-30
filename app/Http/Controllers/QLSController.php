<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLSController extends Controller
{
    //
    public function index(){
        return view('Dashboard.Linksearch.Linksearch');
    }
}
