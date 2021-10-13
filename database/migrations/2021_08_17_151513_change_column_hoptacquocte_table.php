<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnHoptacquocteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hop_tac_quoc_te', function (Blueprint $table) {
            $table->smallInteger('tinhchat', false, true)->nullable()->change();
            $table->smallInteger('phancap', false, true)->nullable()->change();
            $table->smallInteger('danhnghia', false, true)->nullable()->change();
            $table->smallInteger('tinhtrang', false, true)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hop_tac_quoc_te', function (Blueprint $table) {
            //
        });
    }
}
