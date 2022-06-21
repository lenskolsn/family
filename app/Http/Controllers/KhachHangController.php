<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class KhachHangController extends Controller
{
    function index()
    {
        $khachhang = KhachHang::all();
        return view('admin.khachhang.index', compact('khachhang'));
    }
    function them()
    {
        return view('admin.khachhang.them');
    }
    function sua($id = null)
    {
        $khachhang = KhachHang::find($id);
        return view('admin.khachhang.sua', compact('khachhang'));
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
            $user = KhachHang::find(Auth::guard('khachhang')->user()->id);
            $user->avatar = $filename;
            $user->save();
        }

        return back()->with('message', 'Cập nhật avatar thành công!');
    }
    function dangnhap()
    {
        return view('khachhang.dangnhap');
    }
    function dangky()
    {
        return view('khachhang.dangky');
    }
    function dangxuat()
    {
        Auth::guard('khachhang')->logout();
        return redirect()->route('trangchu');
    }
    function luu_dangnhap(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        if (Auth::guard('khachhang')->attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('trangchu');
        } else {
            return back()->with('error', 'Email hoặc mật khẩu không đúng');
        }
    }
    function luu_dangky(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => "required|unique:khach_hangs,email",
            'address' => 'required',
            'phone' => 'required',
            'male' => 'required',
            'password' => 'required',
            'confirm_password' => 'required| same:password',
        ], [], [
            'name' => 'Họ tên',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
            'male' => 'Giới tính',
            'password' => 'Mật khẩu',
            'confirm_password' => 'Nhập lại mật khẩu',
        ]);
        $validator->validate();
        unset($data['confirm_password']);

        $khachhang = KhachHang::updateOrCreate(['id' => $id], $data);
        $khachhang->password =  Hash::make($request->password);
        $khachhang->save();
        return redirect()->route('trangchu.dangnhap');
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);
        if ($id) {
            $khachhang = KhachHang::find($id);
            $data['password'] = $request->password ?? $khachhang->password;
            $data['confirm_password'] = $request->confirm_password ?? $khachhang->password;
        }
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => "required|unique:khach_hangs,email,$id,id",
            'address' => 'required',
            'phone' => 'required',
            'male' => 'required',
            'password' => 'required',
            'confirm_password' => 'required| same:password',
        ], [], [
            'name' => 'Họ tên',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
            'male' => 'Giới tính',
            'password' => 'Mật khẩu',
            'confirm_password' => 'Nhập lại mật khẩu',
        ]);
        $validator->validate();
        unset($data['confirm_password']);

        $khachhang = KhachHang::updateOrCreate(['id' => $id], $data);
        $khachhang->password =  Hash::make($request->password);
        $khachhang->save();
        return redirect()->route('khachhang.danhsach');
    }
}
