<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolePermissionsController extends Controller
{
    //
    public function index(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.RolePermissions.RolePermissions', compact('userName'));
    }

    public function updatePermissions(){
        $userName = session('userName');
        return view('Dashboard.RightPanel.RolePermissions.RolePermissionsUpdate', compact('userName'));
    }
}
