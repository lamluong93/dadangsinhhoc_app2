<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToHoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ho', function (Blueprint $table) {
            $table->foreign('bo_id')->references('id')->on('bo')->onUpdate('cascade');
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
        Schema::table('ho', function (Blueprint $table) {
            $table->dropForeign(['bo_id', 'dongdanh_id']);
        });
    }
}
