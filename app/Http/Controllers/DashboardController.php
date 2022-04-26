<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){


        if (Auth::User()->hasRole('user')){
            return view('userdashboard');
        }elseif(Auth::User()->hasRole('blogwriter')){
            return view('blogwriterdashboard');
        } elseif(Auth::User()->hasRole('admin')){
            return view('dashboard');
        }

    }
    public function myprofile(){
        return view('myprofile');
    }
    public function postcreate(){
        return view('postcreate');
    }
}
