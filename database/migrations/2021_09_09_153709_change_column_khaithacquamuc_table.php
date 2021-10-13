<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnKhaithacquamucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('khai_thac_qua_muc_cho_phep', function (Blueprint $table) {
            $table->unsignedSmallInteger('phanloai')->change();
            $table->unsignedSmallInteger('sinhvatkhaithac')->change();
            $table->unsignedSmallInteger('bienphapkhaithac')->change();
            $table->unsignedSmallInteger('lopphukt')->change();
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
            //
        });
    }
}
