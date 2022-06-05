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

        $banner = Banner::updateOrCreate(['id' => $id], $data);
        $banner->save();
        return back();
    }
}
