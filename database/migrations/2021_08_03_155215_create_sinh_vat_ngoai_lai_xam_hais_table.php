<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhVatNgoaiLaiXamHaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vat_ngoai_lai_xam_hai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->unsignedInteger('phanloaihoc_id')->nullable();
            $table->string('tenkhoahoc');
            $table->unsignedTinyInteger('phanloai'); // tudien
            $table->unsignedTinyInteger('nguycoxamhai')->nullable(); //tudien
            $table->string('nguongoc')->nullable();
            $table->double('dientich')->nullable();
            $table->string('noiphanbo')->nullable();
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->unsignedSmallInteger('thoigian')->nullable();
            $table->unsignedInteger('huyen_id')->nullable();
            $table->unsignedInteger('xa_id')->nullable();
            $table->string('nguondulieu')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('phanloaihoc_id')->references('id')->on('phan_loai_hoc')->onUpdate('cascade');
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
        Schema::dropIfExists('sinh_vat_ngoai_lai_xam_hai');
    }
}
