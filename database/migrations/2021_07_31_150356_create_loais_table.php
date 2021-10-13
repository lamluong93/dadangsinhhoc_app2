<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenkhoahoc');
            $table->string('tentiengviet')->nullable();
            $table->string('maloai')->nullable();
            $table->unsignedInteger('chi_id')->nullable(); // fr key chi
            $table->text('ghichu')->nullable();
            $table->string('chuanphanloai');
            $table->string('trangthai');
            $table->unsignedInteger('dongdanh_id')->nullable(); // fr key dongdanh
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
