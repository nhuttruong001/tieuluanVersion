<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhuyenMai', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('km_id');
            $table->date('km_ngaybd');
            $table->date('km_ngaykt');
            $table->double('km_phantram');
            $table->tinyInteger('km_trangthai')->comment('1 la hien thi 0 la an thong tin');
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
        Schema::dropIfExists('KhuyenMai');
    }
}