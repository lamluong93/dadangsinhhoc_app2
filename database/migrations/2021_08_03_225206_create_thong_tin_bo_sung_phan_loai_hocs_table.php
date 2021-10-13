<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinBoSungPhanLoaiHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_bo_sung_phan_loai_hoc', function (Blueprint $table) {
            $table->increments('id');
            $table->text('luatvebvloai')->nullable();
            $table->string('cites')->nullable();
            $table->string('nguongocvn')->nullable();
            $table->string('tinhtrangxamhai')->nullable();
            $table->text('sudung')->nullable();
            $table->text('motahinhthai')->nullable();
            $table->text('dactinhhanhvi')->nullable();
            $table->text('phanbo_vn')->nullable();
            $table->text('phanbo_tg')->nullable();
            $table->text('phuongphapbv')->nullable();
            $table->text('thoigiansinhsan')->nullable();
            $table->text('hinhthucsinhsan')->nullable();
            $table->text('dieukiensinhsan')->nullable();
            $table->text('thoigiansinhtruong')->nullable();
            $table->text('thucan')->nullable();
            $table->text('dactinhsinhhoc')->nullable();
            $table->text('noisinhsong')->nullable();
            $table->text('dactinhsinhthai')->nullable();
            $table->text('thongtinkhac')->nullable();
            $table->string('tunhien')->nullable();
            $table->string('nhaycam')->nullable();
            $table->integer('hiem', false, true)->nullable();
            $table->string('tinhtrangphanbo_vn')->nullable();
            $table->string('loaidachuu')->nullable();
            $table->unsignedInteger('phanloaihoc_id')->nullable();
            $table->string('rungngapman')->nullable();
            $table->string('dangsong')->nullable();
            $table->string('nhaycammoitruong')->nullable();
            $table->string('phongphuvahiem')->nullable();
            $table->text('ghichu')->nullable();
            $table->unsignedTinyInteger('nguongoccoso')->nullable();
            $table->unsignedTinyInteger('mucdichnuoitrong')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('phanloaihoc_id')->references('id')->on('phan_loai_hoc')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin_bo_sung_phan_loai_hoc');
    }
}
