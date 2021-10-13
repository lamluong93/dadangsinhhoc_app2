<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoatDongDuLichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoat_dong_du_lich', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->integer('khachdulich', false, true)->nullable();
            $table->double('doanhthu')->nullable();
            $table->unsignedSmallInteger('thoigian')->nullable();
            $table->string('nguondulieu')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('diadiem_id')->references('id')->on('khu_bao_ton')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoat_dong_du_lich');
    }
}
