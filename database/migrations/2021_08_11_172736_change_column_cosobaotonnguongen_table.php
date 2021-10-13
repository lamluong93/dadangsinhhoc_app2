<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnCosobaotonnguongenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('co_so_bao_ton_nguon_gens', function (Blueprint $table) {
            // $table->unsignedTinyInteger('capquanly')->change(); //TuDien
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('co_so_bao_ton_nguon_gens', function (Blueprint $table) {
            //
        });
    }
}
