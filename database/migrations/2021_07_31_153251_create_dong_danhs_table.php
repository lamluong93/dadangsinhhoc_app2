<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDongDanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dong_danh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten')->nullable();
            $table->string('nguondulieu')->nullable();
            $table->text('mota')->nullable();
            $table->unsignedInteger('phanloaihoc_id'); // fr phanloaihoc
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
        Schema::dropIfExists('dong_danh');
    }
}
