<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToChucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_chuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten', 200);
            $table->string('loai', 120);
            $table->string('diachi', 500)->nullable();
            $table->string('lienhe', 500)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('dienthoai', 15)->nullable();
            $table->text('mota')->nullable();
            $table->string('trangthai', 80)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_chuc');
    }
}
