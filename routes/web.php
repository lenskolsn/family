<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DanhMucBaiVietController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SanPhamController;
use App\Models\DanhMucBaiViet;
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
    Route::get('/gioi-thieu/{id?}', [HomeController::class, 'gioithieu'])->name('trangchu.gioithieu');
    Route::get('/bai-viet/{id?}', [HomeController::class, 'baiviet'])->name('trangchu.baiviet');
    Route::get('/lien-he/{id?}', [HomeController::class, 'lienhe'])->name('trangchu.lienhe');
    Route::get('/thong-tin/{id?}', [HomeController::class, 'thongtin'])->name('trangchu.thongtin');
    Route::get('/chi-tiet-san-pham/{id?}', [HomeController::class, 'chitietsanpham'])->name('trangchu.chitietsanpham');
    Route::get('/danh-muc-san-pham/{id?}', [HomeController::class, 'danhmucsanpham'])->name('trangchu.danhmucsanpham');
    Route::get('/trang-tim-kiem/{id?}', [HomeController::class, 'trangtimkiem'])->name('trangchu.trangtimkiem');

    Route::get('/dang-nhap', [KhachHangController::class, 'dangnhap'])->name('trangchu.dangnhap');
    Route::post('/dang-nhap', [KhachHangController::class, 'luu_dangnhap'])->name('trangchu.luu_dangnhap');
    Route::get('/dang-ky', [KhachHangController::class, 'dangky'])->name('trangchu.dangky');
    Route::post('/dang-ky', [KhachHangController::class, 'luu_dangky'])->name('trangchu.luu_dangky');
    Route::get('/dang-xuat', [KhachHangController::class, 'dangxuat'])->name('trangchu.dangxuat');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dangnhap'])->name('admin.dangnhap');
    Route::post('/', [AdminController::class, 'luu_dangnhap'])->name('admin.luu_dangnhap');

    Route::get('/dang-ky', [AdminController::class, 'dangky'])->name('admin.dangky');
    Route::post('/dang-ky', [AdminController::class, 'luu_dangky'])->name('admin.luu_dangky');

    Route::get('/dang-xuat', [AdminController::class, 'dangxuat'])->name('admin.dangxuat');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

    Route::prefix('danh-muc')->middleware('auth')->group(function () {
        Route::get('/', [DanhMucController::class, 'index'])->name('danhmuc.danhsach');
        Route::post('/luu/{id?}', [DanhMucController::class, 'luu'])->name('danhmuc.luu');
        Route::get('/sua/{id?}', [DanhMucController::class, 'sua'])->name('danhmuc.sua');
        Route::get('/xoa/{id?}', [DanhMucController::class, 'xoa'])->name('danhmuc.xoa');
    });

    Route::prefix('san-pham')->middleware('auth')->group(function () {
        Route::get('/', [SanPhamController::class, 'index'])->name('sanpham.danhsach');
        Route::get('/them', [SanPhamController::class, 'them'])->name('sanpham.them');
        Route::post('/luu/{id?}', [SanPhamController::class, 'luu'])->name('sanpham.luu');
        Route::get('/sua/{id?}', [SanPhamController::class, 'sua'])->name('sanpham.sua');
        Route::get('/chitiet/{id?}', [SanPhamController::class, 'chitiet'])->name('sanpham.chitiet');
        Route::get('/xoa/{id?}', [SanPhamController::class, 'xoa'])->name('sanpham.xoa');
    });

    Route::prefix('banner')->middleware('auth')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('banner.danhsach');
        Route::get('/them', [BannerController::class, 'them'])->name('banner.them');
        Route::post('/luu/{id?}', [BannerController::class, 'luu'])->name('banner.luu');
        Route::get('/sua/{id?}', [BannerController::class, 'sua'])->name('banner.sua');
        Route::get('/chitiet/{id?}', [BannerController::class, 'chitiet'])->name('banner.chitiet');
        Route::get('/xoa/{id?}', [BannerController::class, 'xoa'])->name('banner.xoa');
    });

    Route::prefix('danh-muc-bai-viet')->middleware('auth')->group(function () {
        Route::get('/', [DanhMucBaiVietController::class, 'index'])->name('danhmucbaiviet.danhsach');
        Route::get('/them', [DanhMucBaiVietController::class, 'them'])->name('danhmucbaiviet.them');
        Route::post('/luu/{id?}', [DanhMucBaiVietController::class, 'luu'])->name('danhmucbaiviet.luu');
        Route::get('/sua/{id?}', [DanhMucBaiVietController::class, 'sua'])->name('danhmucbaiviet.sua');
        Route::get('/chitiet/{id?}', [DanhMucBaiVietController::class, 'chitiet'])->name('danhmucbaiviet.chitiet');
        Route::get('/xoa/{id?}', [DanhMucBaiVietController::class, 'xoa'])->name('danhmucbaiviet.xoa');
    });
});
