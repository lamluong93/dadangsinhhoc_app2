<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->string('dienthoai', 12);
            // $table->text('tinhtrang')->nullable();
            // $table->boolean('kichhoat');
            // $table->string('vaitro', 40);
            // $table->dateTime('lancuoidangnhap')->nullable();
            $table->smallInteger('landangnhap', false, true)->defaultValue(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
