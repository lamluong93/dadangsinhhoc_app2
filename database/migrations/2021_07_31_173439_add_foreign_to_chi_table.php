<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToChiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chi', function (Blueprint $table) {
            $table->foreign('ho_id')->references('id')->on('ho')->onUpdate('cascade');
            $table->foreign('dongdanh_id')->references('id')->on('dong_danh')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chi', function (Blueprint $table) {
            $table->dropForeign(['ho_id', 'dongdanh_id']);
        });
    }
}
