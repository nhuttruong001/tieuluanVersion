<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaigiayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoaiGiay', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('loai_id');
            $table->string('loai_ten');
            $table->tinyInteger('loai_trangthai')->comment('1 la hien thi 0 la an thong tin');
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
        Schema::dropIfExists('LoaiGiay');
    }
}
