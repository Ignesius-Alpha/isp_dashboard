<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolePermissionsController extends Controller
{
    //
    public function index(){
        return view('Dashboard.RightPanel.RolePermissions.RolePermissions');
    }

    public function updatePermissions(){
        return view('Dashboard.RightPanel.RolePermissions.RolePermissionsUpdate');
    }
}
