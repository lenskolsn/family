<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'dangnhap'])->name('admin.dangnhap');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::prefix('danhmuc')->group(function(){
        Route::get('/', [DanhMucController::class,'index'])->name('danhmuc.danhsach');
        Route::post('/luu/{id?}', [DanhMucController::class,'luu'])->name('danhmuc.luu');
        Route::get('/sua/{id?}', [DanhMucController::class,'sua'])->name('danhmuc.sua');
        Route::get('/xoa/{id?}', [DanhMucController::class,'xoa'])->name('danhmuc.xoa');
    });
});
