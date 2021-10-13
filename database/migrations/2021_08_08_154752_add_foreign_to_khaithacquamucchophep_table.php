<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToKhaithacquamucchophepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('khai_thac_qua_muc_cho_phep', function (Blueprint $table) {
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
        Schema::table('khai_thac_qua_muc_cho_phep', function (Blueprint $table) {
            $table->dropForeign(['huyen_id', 'xa_id']);
        });
    }
}
