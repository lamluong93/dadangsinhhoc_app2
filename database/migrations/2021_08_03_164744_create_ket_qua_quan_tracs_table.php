<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetQuaQuanTracsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ket_qua_quan_trac', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diadiemqt_id')->nullable();
            $table->unsignedInteger('thongso_id')->nullable();
            $table->double('ketqua')->nullable();
            $table->string('donvido');
            $table->string('qcvn');
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('diadiemqt_id')->references('id')->on('diem_quan_trac')->onUpdate('cascade');
            $table->foreign('thongso_id')->references('id')->on('thong_so_quan_trac')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ket_qua_quan_trac');
    }
}
