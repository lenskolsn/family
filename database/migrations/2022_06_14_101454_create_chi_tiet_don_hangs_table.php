<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_donhang')->unsigned();
            $table->bigInteger('id_sanpham')->unsigned();
            $table->foreign('id_donhang')->references('id')->on('don_hangs');
            $table->foreign('id_sanpham')->references('id')->on('san_phams');
            $table->integer('gia');
            $table->integer('soluong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_don_hangs');
    }
};
