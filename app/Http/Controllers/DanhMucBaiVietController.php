<?php

namespace App\Http\Controllers;

use App\Models\DanhMucBaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DanhMucBaiVietController extends Controller
{
    function index()
    {
        $danhmucbaiviet = DanhMucBaiViet::all();
        return view('admin.danhmucbaiviet.index', compact('danhmucbaiviet'));
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);

        $validator = Validator::make($data, [
            'tendanhmuc' => 'required'
        ], [], [
            'tendanhmuc' => 'Tên danh mục'
        ])->validate();

        if ($id == null) {
            $action = 'Thêm';
        } else {
            $action = 'Cập nhật';
        }

        $danhmuc = DanhMucBaiViet::updateorcreate(['id' => $id], $data);
        $danhmuc->save();

        return back()->with('message', $action . 'Thêm danh mục thành công!');
    }
    function sua()
    {
        return view('');
    }
    function xoa()
    {
        return view('');
    }
}
