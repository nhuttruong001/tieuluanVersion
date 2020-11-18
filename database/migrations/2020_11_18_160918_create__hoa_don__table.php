<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('hd_id');
            $table->unsignedInteger('user_id');
            $table->date('hd_ngaylap');
            $table->tinyInteger('hd_trangthai')->comment('1 la hien thi 0 la an thong tin');
            $table->timestamps();

            
            $table->foreign('user_id')->references('user_id')->on('User')->onDelete('CASCADE')->onUpdate('CASCADE');

            // $table->foreignId('nv_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('kh_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}

