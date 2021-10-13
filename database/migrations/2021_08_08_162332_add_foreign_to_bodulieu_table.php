<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToBodulieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bo_du_lieu', function (Blueprint $table) {
            $table->foreign('tochuc_id')->references('id')->on('to_chuc')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bo_du_lieu', function (Blueprint $table) {
            $table->dropForeign(['tochuc_id']);
        });
    }
}
