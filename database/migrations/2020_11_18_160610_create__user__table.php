<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('user_id');
            $table->string('user_username');
            $table->string('user_password');
            $table->string('user_hoten');
            $table->date('user_ngaysinh');
            $table->tinyInteger('user_gioitinh')->comment('1 la Nam 0 la Nữ');
            $table->string('user_diachi');
            $table->string('user_sdt');
            $table->tinyInteger('user_quyen')->comment('0 la admin 1 la nguoi dung bt');
            $table->tinyInteger('user_trangthai')->comment('1 la hien thi 0 la an thong tin');
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
        Schema::dropIfExists('User');
    }
}
