<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnChithiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danh_muc_chi_thi', function (Blueprint $table) {
            $table->unsignedSmallInteger('nhomct_id')->change();
            $table->text('ghichu')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('danh_muc_chi_thi', function (Blueprint $table) {
            //
        });
    }
}
