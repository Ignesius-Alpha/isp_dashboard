<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditTrailController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.AuditTrail.AuditTrail', compact('userName'));
    }
}
