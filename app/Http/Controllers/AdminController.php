<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        } else{
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

        $user = User::updateOrCreate($data);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.dangnhap');
    }
    function dashboard()
    {
        return view('admin.dashboard');
    }
    function dangxuat(){
        Auth::logout();
        return redirect()->route('admin.dangnhap');
    }
}
