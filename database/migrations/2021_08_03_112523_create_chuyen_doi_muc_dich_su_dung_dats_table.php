<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyenDoiMucDichSuDungDatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyen_doi_muc_dich_su_dung_dat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenduan');
            $table->unsignedTinyInteger('mucdichchuyendoi')->nullable(); // tudien
            $table->unsignedTinyInteger('loaidatchuyendoi'); // tudien
            $table->double('dientich')->nullable();
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->unsignedSmallInteger('thoigian')->nullable();
            $table->string('huyen')->nullable();
            $table->string('xa')->nullable();
            $table->string('nguondulieu')->nullable();
            $table->text('ghichu')->nullable();
            
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
        Schema::dropIfExists('chuyen_doi_muc_dich_su_dung_dat');
    }
}
