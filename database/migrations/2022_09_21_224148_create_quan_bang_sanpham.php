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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('tensanpham');
            $table->integer('soluong');
            $table->string('anh');
            $table->integer('id_nsx')->unsigned();
            $table->foreign('id_nsx')->references('id')->on('nha_san_xuat');
            
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
        Schema::dropIfExists('quan_bang_sanpham');
    }
};
