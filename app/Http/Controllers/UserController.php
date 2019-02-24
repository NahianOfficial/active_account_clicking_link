<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsUser');
    }

    public function ShowUserDashbord(){

        return view('user-dashbord.home');

    }
    public function ShowUserEvent(){

        return view('user-dashbord.event');

    }
}
