<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhaCungCap', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('ncc_id');
            $table->string('ncc_ten');
            $table->tinyInteger('ncc_trangthai')->comment('1 la hien thi 0 la an thong tin');
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
        Schema::dropIfExists('NhaCungCap');
    }
}
