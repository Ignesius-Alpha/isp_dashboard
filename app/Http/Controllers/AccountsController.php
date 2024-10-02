<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.Accounts.Accounts', compact('userName'));
    }
}
