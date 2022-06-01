<?php

namespace App\Providers;

use App\Models\DanhMuc;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $danhmuc = DanhMuc::all();
        View::share('danhmuc',$danhmuc);
        Paginator::useBootstrap();
    }
}
