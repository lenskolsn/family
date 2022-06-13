<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);

        $validator = Validator::make($data, [
            'hinhanh' => 'required'
        ], [], [
            'hinhanh' => 'Hình ảnh'
        ])->validate();

        $file = $request->file('hinhanh');
        if ($file != null) {
            $filename = $file->hashName();
            $file->storeAs('public/banner', $filename);
            $data['hinhanh'] = $filename;
        }

        if($id!=null){
            $action = 'Thêm';
        } else{
            $action = 'Cập nhật';
        }

        $banner = Banner::updateOrCreate(['id' => $id], $data);
        $banner->save();
        return redirect()->route('banner.danhsach')->with('message', $action . ' dữ liệu thành công!');
    }
    function sua($id=null){
        $banner = Banner::find($id);
        return view('admin.banner.sua',compact('banner'));
    }
    function xoa($id=null){
        Banner::destroy($id);
        return back()->with('message', 'Xóa banner thành công!');
    }
}
