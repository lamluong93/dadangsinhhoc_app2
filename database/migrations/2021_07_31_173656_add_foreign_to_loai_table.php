<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loai', function (Blueprint $table) {
            $table->foreign('chi_id')->references('id')->on('chi')->onUpdate('cascade');
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
        Schema::table('loai', function (Blueprint $table) {
            $table->dropForeign(['chi_id', 'dongdanh_id']);
        });
    }
}
