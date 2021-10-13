<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToTangdansovungdemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tang_dan_so_vung_dem', function (Blueprint $table) {
            $table->foreign('diadiem_id')->references('id')->on('khu_bao_ton')->onUpdate('cascade');
            $table->foreign('huyen_id')->references('id')->on('quan_huyen')->onUpdate('cascade');
            $table->foreign('xa_id')->references('id')->on('xa')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tang_dan_so_vung_dem', function (Blueprint $table) {
            $table->dropForeign(['diadiem_id', 'huyen_id', 'xa_id']);
        });
    }
}
