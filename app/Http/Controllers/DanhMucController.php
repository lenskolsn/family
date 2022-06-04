<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DanhMucController extends Controller
{
    function index()
    {
        $danhmuc = DanhMuc::all();
        return view('admin.danhmuc.index', compact('danhmuc'));
    }
    function sua($id = null)
    {
        $danhmuc = DanhMuc::findOrFail($id);
        return view('admin.danhmuc.sua', compact('danhmuc'));
    }
    function xoa($id = null)
    {
        DanhMuc::destroy($id);
        return back()->with('message', 'Xóa danh mục thành công!');
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);

        $validator = Validator::make($data, [
            'tendanhmuc' => 'required',
        ], [], [
            'tendanhmuc' => 'Tên danh mục'
        ])->validate();

        $danhmuc = DanhMuc::updateOrCreate(['id' => $id], $data);
        $danhmuc->save();

        return redirect()->route('danhmuc.danhsach')->with('message', ' dữ liệu thành công!');
    }
}
