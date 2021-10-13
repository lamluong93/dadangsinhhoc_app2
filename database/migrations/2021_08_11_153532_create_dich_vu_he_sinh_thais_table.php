<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDichVuHeSinhThaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dich_vu_he_sinh_thai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->text('mota')->nullable();
            $table->unsignedTinyInteger('phanloai'); // TuDien
            $table->double('giatriluonggia')->nullable();
            $table->integer('hesinhthai_id', false, true)->nullable(); //foreign
            $table->integer('diadiem_id', false, true)->nullable(); //foreign
            $table->string('huyen')->nullable();
            $table->string('xa')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('hesinhthai_id')->references('id')->on('he_sinh_thais')->onUpdate('cascade');
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
        Schema::dropIfExists('dich_vu_he_sinh_thai');
    }
}
