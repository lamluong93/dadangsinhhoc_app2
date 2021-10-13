<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemQuanTracsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem_quan_trac', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kyhieumau');
            $table->string('motavitri')->nullable();
            $table->double('kinhdo');
            $table->double('vido');
            $table->integer('thoigian', false, true);
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->unsignedInteger('loaihinhqt_id');
            $table->string('donviquantrac')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('diadiem_id')->references('id')->on('khu_bao_ton')->onUpdate('cascade');
            $table->foreign('loaihinhqt_id')->references('id')->on('loai_hinh_quan_trac')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diem_quan_trac');
    }
}
