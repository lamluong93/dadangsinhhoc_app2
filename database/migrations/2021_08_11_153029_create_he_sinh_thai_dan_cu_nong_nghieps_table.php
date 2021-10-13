<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeSinhThaiDanCuNongNghiepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('he_sinh_thai_dan_cu_nong_nghiep', function (Blueprint $table) {
            $table->integer('hesinhthai_id', false, true);
            $table->primary('hesinhthai_id');
            $table->string('phanloai');
            $table->unsignedInteger('huyen_id')->nullable();
            $table->unsignedInteger('xa_id')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('hesinhthai_id')->references('id')->on('he_sinh_thais')->onUpdate('cascade');
            $table->foreign('huyen_id')->references('id')->on('quan_huyen')->onUpdate('cascade');
            $table->foreign('xa_id')->references('id')->on('xa')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('he_sinh_thai_dan_cu_nong_nghiep');
    }
}
