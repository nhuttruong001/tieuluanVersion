<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDon', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->unsignedInteger('giay_id');
            $table->unsignedInteger('hd_id');
            $table->unsignedInteger('soluong');
            $table->timestamps();

            $table->foreign('giay_id')->references('giay_id')->on('Giay')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('hd_id')->references('hd_id')->on('HoaDon')->onDelete('CASCADE')->onUpdate('CASCADE');

            // $table->foreignId('giay_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('hd_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadon');
    }
}
