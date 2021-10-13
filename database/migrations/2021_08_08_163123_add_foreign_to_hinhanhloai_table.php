<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToHinhanhloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hinh_anh_loai', function (Blueprint $table) {
            $table->foreign('phathienloai_id')->references('id')->on('phat_hien_loai')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hinh_anh_loai', function (Blueprint $table) {
            $table->dropForeign(['phathienloai_id']);
        });
    }
}
