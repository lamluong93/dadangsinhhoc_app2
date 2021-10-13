<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOTieuChuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_tieu_chuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('kichthuoc')->nullable();
            $table->string('hinhdang')->nullable();
            $table->string('vitri')->nullable();
            $table->geometry('khonggian')->nullable();
            $table->double('docao')->nullable();
            $table->double('dosau')->nullable();
            $table->unsignedInteger('diadiem_id');
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
        Schema::dropIfExists('o_tieu_chuan');
    }
}
