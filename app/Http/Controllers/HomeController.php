<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $sanphammoi = SanPham::orderByDesc('id')->paginate(4);
        $danhmuc = DanhMuc::all();
        $sanphamtheodanhmuc = SanPham::all();
        return view('welcome', compact('sanphammoi', 'danhmuc', 'sanphamtheodanhmuc'));
    }
    function chitietsanpham($id = null)
    {
        $sanpham = SanPham::findOrFail($id);
        return view('chitietsanpham', compact('sanpham'));
    }
    function danhmucsanpham($id = null)
    {
        $sanpham = SanPham::where('id_danhmuc', $id)->get();
        $dm = DanhMuc::find($id);
        return view('danhmucsanpham', compact('sanpham', 'dm'));
    }
    function trangtimkiem(Request $request)
    {
        $key = $request->key;
        $sanpham = SanPham::where('tensanpham', 'like', '%' . $key . '%')->get();
        return view('trangtimkiem', compact('sanpham'));
    }
    function gioithieu()
    {
        return view('gioithieu');
    }
    function baiviet()
    {
        return view('baiviet');
    }
    function lienhe()
    {
        return view('lienhe');
    }
    function thongtin(){
        return view('khachhang.thongtin');
    }
}
