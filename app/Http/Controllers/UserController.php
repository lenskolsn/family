<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $nhanvien = User::all();
        return view('admin.nhanvien.index', compact('nhanvien'));
    }
}
