<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToNganhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nganh', function (Blueprint $table) {
            $table->foreign('gioi_id')->references('id')->on('gioi')->onUpdate('cascade');
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
        Schema::table('nganh', function (Blueprint $table) {
            $table->dropForeign(['gioi_id', 'dongdanh_id']);
        });
    }
}
