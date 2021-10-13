<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropForeignkeyChithiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danh_muc_chi_thi', function (Blueprint $table) {
            // $table->dropForeign(['nhomct_id ']);
            $table->string('nhomct_id', 120)->change();
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
