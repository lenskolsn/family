<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SanPhamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('trangchu');
    Route::get('/gioithieu/{id?}', [HomeController::class, 'gioithieu'])->name('trangchu.gioithieu');
    Route::get('/baiviet/{id?}', [HomeController::class, 'baiviet'])->name('trangchu.baiviet');
    Route::get('/lienhe/{id?}', [HomeController::class, 'lienhe'])->name('trangchu.lienhe');
    Route::get('/thongtin/{id?}', [HomeController::class, 'thongtin'])->name('trangchu.thongtin');
    Route::get('/chitietsanpham/{id?}', [HomeController::class, 'chitietsanpham'])->name('trangchu.chitietsanpham');
    Route::get('/danhmucsanpham/{id?}', [HomeController::class, 'danhmucsanpham'])->name('trangchu.danhmucsanpham');
    Route::get('/trangtimkiem/{id?}', [HomeController::class, 'trangtimkiem'])->name('trangchu.trangtimkiem');

    Route::get('/dangnhap', [KhachHangController::class, 'dangnhap'])->name('trangchu.dangnhap');
    Route::post('/dangnhap', [KhachHangController::class, 'luu_dangnhap'])->name('trangchu.luu_dangnhap');
    Route::get('/dangky', [KhachHangController::class, 'dangky'])->name('trangchu.dangky');
    Route::post('/dangky', [KhachHangController::class, 'luu_dangky'])->name('trangchu.luu_dangky');
    Route::get('/dangxuat', [KhachHangController::class, 'dangxuat'])->name('trangchu.dangxuat');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dangnhap'])->name('admin.dangnhap');
    Route::post('/', [AdminController::class, 'luu_dangnhap'])->name('admin.luu_dangnhap');

    Route::get('/dangky', [AdminController::class, 'dangky'])->name('admin.dangky');
    Route::post('/dangky', [AdminController::class, 'luu_dangky'])->name('admin.luu_dangky');

    Route::get('/dangxuat', [AdminController::class, 'dangxuat'])->name('admin.dangxuat');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

    Route::prefix('danhmuc')->middleware('auth')->group(function () {
        Route::get('/', [DanhMucController::class, 'index'])->name('danhmuc.danhsach');
        Route::post('/luu/{id?}', [DanhMucController::class, 'luu'])->name('danhmuc.luu');
        Route::get('/sua/{id?}', [DanhMucController::class, 'sua'])->name('danhmuc.sua');
        Route::get('/xoa/{id?}', [DanhMucController::class, 'xoa'])->name('danhmuc.xoa');
    });

    Route::prefix('sanpham')->middleware('auth')->group(function () {
        Route::get('/', [SanPhamController::class, 'index'])->name('sanpham.danhsach');
        Route::get('/them', [SanPhamController::class, 'them'])->name('sanpham.them');
        Route::post('/luu/{id?}', [SanPhamController::class, 'luu'])->name('sanpham.luu');
        Route::get('/sua/{id?}', [SanPhamController::class, 'sua'])->name('sanpham.sua');
        Route::get('/chitiet/{id?}', [SanPhamController::class, 'chitiet'])->name('sanpham.chitiet');
        Route::get('/xoa/{id?}', [SanPhamController::class, 'xoa'])->name('sanpham.xoa');
    });
});
