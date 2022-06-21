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
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('tenkhachhang')->nullable();
            $table->string('diachi')->nullable();
            $table->string('ghichu')->nullable();
            $table->integer('tongtien');
            $table->bigInteger('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')->references('id')->on('khach_hangs');
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
        Schema::dropIfExists('don_hangs');
    }
};
