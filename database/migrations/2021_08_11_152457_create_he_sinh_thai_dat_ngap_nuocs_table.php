<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeSinhThaiDatNgapNuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('he_sinh_thai_dat_ngap_nuoc', function (Blueprint $table) {
            $table->integer('hesinhthai_id', false, true);
            $table->primary('hesinhthai_id');
            $table->unsignedTinyInteger('phanloai')->nullable(); // TuDien
            $table->double('mucdich_cd')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('hesinhthai_id')->references('id')->on('he_sinh_thais')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('he_sinh_thai_dat_ngap_nuoc');
    }
}
