<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinLuuTruNguonGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_luu_tru_nguon_gen', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguongen_id');
            $table->string('huyen', 500)->nullable();
            $table->string('xa', 500)->nullable();
            $table->string('thon', 500)->nullable();
            $table->string('nguoisohuu', 200)->nullable();
            $table->text('thongtinlienhe')->nullable();
            $table->geometry('khonggian')->nullable();
            $table->text('ghichu')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('nguongen_id')->references('id')->on('nguon_gen')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin_luu_tru_nguon_gen');
    }
}
