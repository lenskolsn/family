<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function dangnhap()
    {
        return view('admin.dangnhap');
    }
    function luu_dangnhap(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        } else {
            return back();
        }
    }
    function dangky()
    {
        return view('admin.dangky');
    }
    function luu_dangky(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ], [], [
            'name' => 'Họ tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'confirm_password' => 'Nhập lại mật khẩu',
        ])->validate();

        unset($data['confirm_password']);

        $user = User::updateOrCreate($data);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.dangnhap');
    }
    function dashboard()
    {
        return view('admin.dashboard');
    }
    function dangxuat()
    {
        Auth::logout();
        return redirect()->route('admin.dangnhap');
    }
    function thongtin()
    {
        return view('admin.taikhoan');
    }
    function doiavatar(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $file = $request->file('avatar');
        if ($file != null) {
            $filename = $file->hashName();
            $file->storeAs('/public/avatar', $filename);
            $data['avatar'] = $filename;
            $user = User::find(Auth::user()->id);
            $user->avatar = $filename;
            $user->save();
        }

        return back()->with('message', 'Cập nhật avatar thành công!');
    }
}
