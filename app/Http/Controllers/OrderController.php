<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.Orders.Orders', compact('userName'));
    }
}
