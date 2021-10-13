<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnBaocaoaplucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bao_cao_ap_luc_len_ddsh', function (Blueprint $table) {
            $table->unsignedSmallInteger('phancap')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bao_cao_ap_luc_len_ddsh', function (Blueprint $table) {
            //
        });
    }
}
