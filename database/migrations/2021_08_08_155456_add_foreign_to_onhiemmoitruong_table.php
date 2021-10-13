<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToOnhiemmoitruongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau', function (Blueprint $table) {
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
        Schema::table('o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau', function (Blueprint $table) {
            $table->dropForeign(['huyen_id', 'xa_id']);
        });
    }
}
