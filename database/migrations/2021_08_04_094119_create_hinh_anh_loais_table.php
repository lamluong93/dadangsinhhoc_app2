<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhLoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_loai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dinhdanh');
            $table->text('thamkhao')->nullable();
            $table->string('tieude')->nullable();
            $table->text('mota')->nullable();
            $table->string('khonggian')->nullable();
            $table->double('vido')->nullable();
            $table->double('kinhdo')->nullable();
            $table->string('dinhdang')->nullable();
            $table->dateTime('thoigiantao')->nullable();
            $table->string('tacgia')->nullable();
            $table->string('nguoidonggop')->nullable();
            $table->string('nguoixuatban')->nullable();
            $table->string('docgialienquan')->nullable();
            $table->string('giayphep')->nullable();
            $table->string('chusohuu')->nullable();
            $table->string('loaidulieu')->nullable();
            $table->tinyInteger('dulieu')->nullable();
            $table->unsignedInteger('phathienloai_id')->nullable();
            $table->unsignedInteger('phanloaihoc_id')->nullable();
            $table->text('khac')->nullable();
            $table->smallInteger('tinhtrangcongbo', false, true)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('phanloaihoc_id')->references('id')->on('phan_loai_hoc')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinh_anh_loai');
    }
}
