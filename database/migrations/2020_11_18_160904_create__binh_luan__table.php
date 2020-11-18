<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BinhLuan', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('bl_id');
            $table->unsignedInteger('giay_id');
            $table->unsignedInteger('user_id');
            $table->text('bl_noidung');
            $table->tinyInteger('bl_trangthai')->comment('1 la hien thi 0 la an thong tin');
            $table->timestamps();

            $table->foreign('giay_id')->references('giay_id')->on('Giay')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('user_id')->on('User')->onDelete('CASCADE')->onUpdate('CASCADE');


            // $table->foreignId('giay_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('binhluan');
    }
}
