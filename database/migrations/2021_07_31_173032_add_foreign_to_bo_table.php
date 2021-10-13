<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToBoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bo', function (Blueprint $table) {
            $table->foreign('lop_id')->references('id')->on('lop')->onUpdate('cascade');
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
        Schema::table('bo', function (Blueprint $table) {
            $table->dropForeign(['lop_id', 'dongdanh_id']);
        });
    }
}
