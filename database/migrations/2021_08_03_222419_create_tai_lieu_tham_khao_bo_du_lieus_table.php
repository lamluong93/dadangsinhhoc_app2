<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiLieuThamKhaoBoDuLieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_lieu_tham_khao_bo_du_lieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->unsignedInteger('bodulieu_id');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('bodulieu_id')->references('id')->on('bo_du_lieu')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_lieu_tham_khao_bo_du_lieu');
    }
}
