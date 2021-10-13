<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanLoaiHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_loai_hoc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idtenkhoahoc')->nullable();
            $table->string('tenkhoahoc');
            $table->string('kieuten_kh')->nullable();
            $table->string('tenchapnhan')->nullable();
            $table->string('tencapbacgannhat')->nullable();
            $table->string('tengoc')->nullable();
            $table->string('nameAccordingTo')->nullable();
            $table->string('tenxuatban')->nullable();
            $table->string('tennamxb')->nullable();
            $table->string('capbaccaohon')->nullable();
            $table->string('specific_epithet')->nullable();
            $table->string('infraspecific_epithet')->nullable();
            $table->string('capbacphanloai')->nullable();
            $table->string('bacphanloainguyenvan')->nullable();
            $table->string('tentacgiakh')->nullable();
            $table->string('tenbanngu')->nullable();
            $table->string('tenbanngu_ta')->nullable();
            $table->string('tenbanngu_khac')->nullable();
            $table->string('madanhphap')->nullable();
            $table->string('tinhtrangphanloai')->nullable();
            $table->string('tinhtrangdanhphap')->nullable();
            $table->string('nhanxet')->nullable();
            $table->string('sohuu')->nullable();
            $table->string('chusohuu')->nullable();
            $table->string('quyentruycap')->nullable();
            $table->string('trichdan')->nullable();
            $table->text('thamchieu')->nullable();
            $table->unsignedInteger('gioi_id')->nullable(); // fr gioi
            $table->unsignedInteger('nganh_id')->nullable(); // fr nganh
            $table->unsignedInteger('lop_id')->nullable(); // fr lop
            $table->unsignedInteger('bo_id')->nullable(); // fr bo
            $table->unsignedInteger('ho_id')->nullable(); // fr ho
            $table->unsignedInteger('chi_id')->nullable(); // fr chi
            $table->unsignedInteger('loai_id')->nullable(); // fr loai
            $table->unsignedInteger('duoiloai_id')->nullable(); // fr duoi loai
            $table->string('chuanphanloai')->nullable();
            $table->unsignedInteger('bodulieu_id')->nullable(); // fr bodulieu

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            // khoa ngoai
            $table->foreign('gioi_id')->references('id')->on('gioi')->onUpdate('cascade');
            $table->foreign('nganh_id')->references('id')->on('nganh')->onUpdate('cascade');
            $table->foreign('lop_id')->references('id')->on('lop')->onUpdate('cascade');
            $table->foreign('bo_id')->references('id')->on('bo')->onUpdate('cascade');
            $table->foreign('ho_id')->references('id')->on('ho')->onUpdate('cascade');
            $table->foreign('chi_id')->references('id')->on('chi')->onUpdate('cascade');
            $table->foreign('loai_id')->references('id')->on('loai')->onUpdate('cascade');
            $table->foreign('duoiloai_id')->references('id')->on('duoi_loai')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phan_loai_hoc');
    }
}
