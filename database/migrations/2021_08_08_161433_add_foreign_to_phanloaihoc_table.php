<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToPhanloaihocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phan_loai_hoc', function (Blueprint $table) {
            $table->foreign('bodulieu_id')->references('id')->on('bo_du_lieu')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phan_loai_hoc', function (Blueprint $table) {
            $table->dropForeign(['bodulieu_id']);
        });
    }
}
