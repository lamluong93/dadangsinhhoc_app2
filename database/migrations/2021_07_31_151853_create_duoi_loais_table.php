<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuoiLoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duoi_loai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenkhoahoc');
            $table->string('tentiengviet')->nullable();
            $table->string('bacphanloai');
            $table->text('ghichu')->nullable();
            $table->string('chuanphanloai');
            $table->unsignedInteger('loai_id'); // fr key loai
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('loai_id')->references('id')->on('loai')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duoi_loai');
    }
}
