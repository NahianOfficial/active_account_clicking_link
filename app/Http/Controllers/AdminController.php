<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    public function ShowAdminDashbord(){

        return view('admin-dashbord.home');

    }

    public function ShowAdminAllUser(){

        return view('admin-dashbord.ShowAlluser');

    }

}
