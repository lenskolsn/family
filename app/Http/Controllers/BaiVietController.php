<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    function index()
    {
        return view('admin.baiviet.index');
    }
    function them()
    {
        return view('admin.baiviet.them');
    }
}
