<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnChuyendoimdsddatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuyen_doi_muc_dich_su_dung_dat', function (Blueprint $table) {
            $table->unsignedSmallInteger('mucdichchuyendoi')->change();
            $table->unsignedSmallInteger('loaidatchuyendoi')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chuyen_doi_muc_dich_su_dung_dat', function (Blueprint $table) {
            //
        });
    }
}
