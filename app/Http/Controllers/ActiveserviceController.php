<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveserviceController extends Controller
{
    //
    public function index(){
        return view('Dashboard.Activeservices.Activeservices');
    }
}
