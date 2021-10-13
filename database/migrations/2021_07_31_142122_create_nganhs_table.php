<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNganhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nganh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenkhoahoc');
            $table->string('tentiengviet')->nullable();
            $table->unsignedInteger('gioi_id'); // fr key
            $table->text('ghichu')->nullable();
            $table->string('chuanphanloai');
            $table->string('trangthai');
            $table->unsignedInteger('dongdanh_id')->nullable(); // fr key
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
        Schema::dropIfExists('nganh');
    }
}
