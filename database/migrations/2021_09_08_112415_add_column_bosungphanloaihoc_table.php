<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnBosungphanloaihocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thong_tin_bo_sung_phan_loai_hoc', function (Blueprint $table) {
            $table->unsignedSmallInteger('phanbodiaphuong')->nullable();
            $table->unsignedSmallInteger('phongphuvahiem')->change();
            $table->unsignedSmallInteger('ghichu')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thong_tin_bo_sung_phan_loai_hoc', function (Blueprint $table) {
            //
        });
    }
}
