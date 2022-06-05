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
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->id();
            $table->string('tieude')->nullable();
            $table->string('hinhanh')->nullable();
            $table->text('mota')->nullable();
            $table->text('noidung')->nullable();
            $table->integer('tongluotxem')->nullable();
            $table->bigInteger('id_danhmuc')->unsigned();
            $table->bigInteger('id_tacgia')->unsigned();

            $table->foreign('id_danhmuc')->references('id')->on('danh_muc_bai_viets');
            $table->foreign('id_tacgia')->references('id')->on('users');
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
        Schema::dropIfExists('bai_viets');
    }
};
