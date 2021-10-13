<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeSinhThaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('he_sinh_thais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->text('mota')->nullable();
            $table->geometry('khonggian')->nullable();
            $table->double('dientich')->nullable();
            $table->string('nguongoc')->nullable();
            $table->unsignedInteger('phanloaihesinhthai_id');
            $table->string('huyen')->nullable();
            $table->string('xa')->nullable();
            $table->string('nguontailieu')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('phanloaihesinhthai_id')->references('id')->on('phan_loai_he_sinh_thais')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('he_sinh_thais');
    }
}
