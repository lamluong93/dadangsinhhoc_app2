<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnNguongenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nguon_gen', function (Blueprint $table) {
            $table->unsignedSmallInteger('tinhtrangluugiu')->change();
            $table->unsignedSmallInteger('tinhtrangnghiencuu')->change();
            $table->unsignedSmallInteger('tinhtrangsudung')->change();
            $table->unsignedSmallInteger('nguongoc')->change();
            $table->unsignedSmallInteger('phuongthucluutru')->change();
            $table->unsignedSmallInteger('genquyhiem')->change();
            $table->unsignedSmallInteger('banchatditruyen')->change();
            $table->unsignedSmallInteger('tinhtrang')->change();
            $table->unsignedSmallInteger('genco_dk')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nguon_gen', function (Blueprint $table) {
            //
        });
    }
}
