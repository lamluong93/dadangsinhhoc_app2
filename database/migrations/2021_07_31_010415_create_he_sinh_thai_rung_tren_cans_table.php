<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeSinhThaiRungTrenCansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('he_sinh_thai_rung_tren_can', function (Blueprint $table) {
            $table->integer('hesinhthai_id', false, true);
            $table->primary('hesinhthai_id');
            $table->string('phanloairung');
            $table->string('phanloaihesinhthai');
            $table->string('dophu', 80)->nullable();
            $table->double('truluong')->nullable();
            $table->string('donvitinh', 60)->nullable();
            $table->double('dientichrung_cd')->nullable();
            $table->double('dientichmoichet')->nullable();
            $table->double('dientichrungphongho')->nullable();
            $table->double('dientich_fsc')->nullable();
            $table->double('dientich_dvmtr')->nullable();
            
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
        Schema::dropIfExists('he_sinh_thai_rung_tren_can');
    }
}
