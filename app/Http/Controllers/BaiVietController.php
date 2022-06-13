<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Models\DanhMucBaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BaiVietController extends Controller
{
    function index()
    {
        $baiviet = BaiViet::all();
        return view('admin.baiviet.index', compact('baiviet'));
    }
    function them()
    {
        $danhmucbaiviet = DanhMucBaiViet::all();
        return view('admin.baiviet.them', compact('danhmucbaiviet'));
    }
    function sua($id = null)
    {
        $baiviet = BaiViet::findOrFail($id);
        $danhmucbaiviet = DanhMucBaiViet::all();
        return view('admin.baiviet.sua', compact('baiviet', 'danhmucbaiviet'));
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['id_tacgia'] = Auth::user()->id;

        $validator = Validator::make($data, [
            'tieude' => 'required',
            // 'hinhanh' => 'required',
            'mota' => 'required',
            'noidung' => 'required',
            'id_danhmuc' => 'required',
        ], [], [
            'tieude' => 'Tiêu đề',
            // 'hinhanh' => 'Hình ảnh',
            'mota' => 'Mô tả',
            'noidung' => 'Nội dung',
            'id_danhmuc' => 'Danh mục',
        ])->validate();

        $file = $request->file('hinhanh');
        if ($file != null) {
            $filename = $file->hashName();
            $file->storeAs('/public/anhbaiviet', $filename);
            $data['hinhanh'] = $filename;
        }
        if ($id == null) {
            $action = 'Thêm';
        } else {
            $action = 'Cập nhật';
        }
        $baiviet = BaiViet::updateOrCreate(['id' => $id], $data);
        $baiviet->save();

        return redirect()->route('baiviet.danhsach')->with('message', $action . ' dữ liệu thành công!');
    }
}
