<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
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
        // dd($key);
        $sanpham = SanPham::where('tensanpham', 'like', '%' . $key . '%')->get();
        // $select = "SELECT tensanpham FROM sanpham WHERE tensanpham LIKE % $key %";
        return view('trangtimkiem', compact('sanpham'));
    }
    function gioithieu()
    {
        return view('gioithieu');
    }
    function baiviet()
    {
        $baiviet = BaiViet::all();
        return view('baiviet', compact('baiviet'));
    }
    function chitietbaiviet($id = null)
    {
        $baiviet = BaiViet::find($id);
        return view('chitietbaiviet', compact('baiviet'));
    }
    function lienhe()
    {
        return view('lienhe');
    }
    function thongtin()
    {
        return view('khachhang.thongtin');
    }
}
