<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToPhathienloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phat_hien_loai', function (Blueprint $table) {
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
        Schema::table('phat_hien_loai', function (Blueprint $table) {
            $table->dropForeign(['tochuc_id']);
        });
    }
}
