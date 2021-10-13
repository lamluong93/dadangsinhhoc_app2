<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanLoaiHeSinhThaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_loai_he_sinh_thais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->text('mota')->nullable();
            $table->unsignedInteger('thuocloaihesinhthai');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('thuocloaihesinhthai')->references('id')->on('phan_loai_he_sinh_thais')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phan_loai_he_sinh_thais');
    }
}
