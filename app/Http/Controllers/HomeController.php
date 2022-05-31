<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $sanpham = SanPham::all();
        return view('welcome',compact('sanpham'));
    }
}
