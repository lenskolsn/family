<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dangnhap(){
        return view('admin.dangnhap');
    }
    function dashboard(){
        return view('admin.dashboard');
    }
}
