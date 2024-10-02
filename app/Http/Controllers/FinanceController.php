<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.Finance.Finance', compact('userName'));
    }
}
