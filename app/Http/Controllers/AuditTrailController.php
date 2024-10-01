<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditTrailController extends Controller
{
    //
    public function index(){
        return view('Dashboard.RightPanel.AuditTrail.AuditTrail');
    }
}
