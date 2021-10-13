<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhatHienLoaiBoSungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phat_hien_loai_bo_sung', function (Blueprint $table) {
            $table->integer('bosung_id', false, true);
            $table->primary('bosung_id');
            $table->dateTime('ngaynhandang')->nullable();
            $table->text('thamkhaonhandang')->nullable();
            $table->text('tinhtrangkiemdinh')->nullable();
            $table->text('luuynhandang')->nullable();
            $table->string('dinhtinhnhandang', 200)->nullable();
            $table->string('loaitrangthai', 150)->nullable();
            $table->string('id_tenkhoahoc', 80)->nullable();
            $table->string('tenkhoahoc', 120);
            $table->string('kieutenkhoahoc', 120)->nullable();
            $table->text('tenchapnhan')->nullable();
            $table->string('tencapbacgannhat')->nullable();
            $table->string('tengoc')->nullable();
            $table->string('name_according_to', 150)->nullable();
            $table->string('tenxuatban', 200)->nullable();
            $table->string('tennamxuatban', 12)->nullable();
            $table->string('capbaccaohon')->nullable();
            $table->string('specific_epithet')->nullable();
            $table->string('infraspecific_epithet')->nullable();
            $table->string('capbacphanloai')->nullable();
            $table->string('bacphanloainguyenvan')->nullable();
            $table->string('tentacgia_kh')->nullable();
            $table->string('tenbanngu')->nullable();
            $table->string('tenbanngu_ta')->nullable();
            $table->string('tenbanngukhac')->nullable();

            $table->string('madanhphap', 120)->nullable();
            $table->string('tinhtrangphanloai')->nullable();
            $table->string('tinhtrangdanhphap')->nullable();
            $table->string('nhanxet')->nullable();
            $table->string('sohuu')->nullable();
            $table->string('chusohuu', 150)->nullable();
            $table->text('trichdan')->nullable();

            $table->foreign('bosung_id')->references('id')->on('phat_hien_loai')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phat_hien_loai_bo_sung');
    }
}
