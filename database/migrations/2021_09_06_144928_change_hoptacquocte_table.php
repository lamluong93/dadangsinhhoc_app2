<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeHoptacquocteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hop_tac_quoc_te', function (Blueprint $table) {
            $table->dropColumn('noidung');
            $table->string('file_dinhkem', 70)->nullable();
            $table->string('file_tengoc', 150)->nullable();
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
