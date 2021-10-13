<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhuBaoTonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khu_bao_ton', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('tentienganh')->nullable();
            $table->string('tengoc')->nullable();
            $table->string('vung', 100)->nullable();
            $table->string('huyen', 100)->nullable();
            $table->string('xa', 100)->nullable();
            $table->string('phanloai', 100)->nullable();
            $table->string('iucn')->nullable();
            $table->double('dientich');
            $table->string('congnhan');
            $table->integer('namcongnhan');
            $table->string('phancap')->nullable();
            $table->string('danhhieuquocte')->nullable();
            $table->double('tyle')->nullable();
            $table->string('cancuphaply')->nullable();
            $table->text('mota')->nullable();
            $table->geometry('khonggian')->nullable();
            $table->string('mucdodadangsinhhoc')->nullable();
            $table->text('loaimoitruongsong')->nullable();
            $table->text('hethucvatdocdao')->nullable();
            $table->text('hedongvatdocdao')->nullable();
            $table->text('hoatdong')->nullable();
            $table->text('dadangsinhhoc')->nullable();
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
        Schema::dropIfExists('khu_bao_ton');
    }
}
