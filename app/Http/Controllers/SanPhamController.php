<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Constraint\SameSize;

class SanPhamController extends Controller
{
    function index()
    {
        $sanpham = SanPham::orderByDesc('id')->paginate(4);
        return view('admin.sanpham.index', compact('sanpham'));
    }
    function them()
    {
        return view('admin.sanpham.them');
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);

        $validator = Validator::make($data, [
            'tensanpham' => 'required',
            'id_danhmuc' => 'required',
            'gia' => 'required',
            'mota' => 'required',
            // 'chieucao' => 'required',
        ], [], [
            'tensanpham' => 'Tên sản phẩm',
            'id_danhmuc' => 'Danh mục',
            'hinhanh' => 'Hình ảnh',
            'mota' => 'Mô tả',
            // 'chieucao' => 'Chiều cao',
        ])->validate();

        $file = $request->file('hinhanh');
        if ($file != null) {
            $filename = $file->hashName();
            $file->storeAs('/public/sanpham', $filename);
            $data['hinhanh'] = $filename;
        }

        if ($id == null) {
            $action = 'Thêm';
        } else {
            $action = 'Cập nhật';
        }

        $sanpham = SanPham::updateOrCreate(['id' => $id], $data);
        $sanpham->save();

        return redirect()->route('sanpham.danhsach')->with('message', $action . ' sản phẩm thành công!');
    }
    function sua($id = null)
    {
        $sanpham = SanPham::findOrFail($id);
        $danhmuc = DanhMuc::all();
        return view('admin.sanpham.sua', compact('sanpham', 'danhmuc'));
    }
    function chitiet($id = null)
    {
        $sanpham = SanPham::findOrFail($id);
        return view('admin.sanpham.chitiet', compact('sanpham'));
    }
    function xoa($id = null)
    {
        SanPham::destroy($id);
        return back();
    }
}
