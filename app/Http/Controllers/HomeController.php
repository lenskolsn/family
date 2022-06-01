<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $sanphammoi = SanPham::orderByDesc('id')->paginate(4);
        $danhmuc = DanhMuc::all();
        $sanphamtheodanhmuc = SanPham::all();
        return view('welcome',compact('sanphammoi','danhmuc','sanphamtheodanhmuc'));
    }
    function chitietsanpham($id = null){
        $sanpham = SanPham::findOrFail($id);
        return view('chitietsanpham',compact('sanpham'));
    }
}
