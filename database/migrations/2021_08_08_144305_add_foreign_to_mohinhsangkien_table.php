<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToMohinhsangkienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mo_hinh_sang_kien', function (Blueprint $table) {
            $table->foreign('coquan_id')->references('id')->on('to_chuc')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mo_hinh_sang_kien', function (Blueprint $table) {
            $table->dropForeign(['coquan_id']);
        });
    }
}
