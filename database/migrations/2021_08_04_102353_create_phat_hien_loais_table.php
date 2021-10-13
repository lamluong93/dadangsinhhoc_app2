<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhatHienLoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phat_hien_loai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kieu')->nullable();
            $table->dateTime('ngaycapnhat')->nullable();
            $table->string('ngonngu', 50)->nullable();
            $table->string('quyen', 80)->nullable();
            $table->string('nguoigiuquyen', 30)->nullable();
            $table->string('quyentruycap', 50)->nullable();
            $table->string('trichdantm', 120)->nullable();
            $table->string('thamkhao', 200)->nullable();
            $table->string('dinhdanhtruso', 60)->nullable();
            $table->string('dinhdanhbosuutap', 60)->nullable();
            $table->integer('bodulieu_id', false, true)->nullable();
            $table->string('matruso', 60)->nullable();
            $table->string('mabosuutap', 60)->nullable();
            $table->string('matruso_sh', 60)->nullable();
            $table->string('cancubanghi', 80)->nullable();
            $table->string('thongtintuchoi', 100)->nullable();
            $table->string('tongquat', 100)->nullable();
            $table->string('tinhdong', 60)->nullable();
            $table->string('dinhdanhhientruong', 60)->nullable();
            $table->string('sodanhmuc', 60)->nullable();
            $table->string('luu_y', 100)->nullable();
            $table->string('sobanghi', 40)->nullable();
            $table->string('nguoithuthap', 30)->nullable();
            $table->string('dinhdanhcanhan', 50)->nullable();
            $table->string('socanhan', 30)->nullable();
            $table->string('gioitinh', 15)->nullable();
            $table->string('giaidoansong', 80)->nullable();
            $table->string('dieukiensinhsan', 60)->nullable();
            $table->string('hanhvi', 60)->nullable();
            $table->string('ynghiathanhlap', 60)->nullable();
            $table->string('trangthaihientruong', 60)->nullable();
            $table->string('chuanbi', 100)->nullable();
            $table->string('sapdat', 100)->nullable();
            $table->string('sodanhmuckhac', 120)->nullable();
            $table->string('dinhdanhtruoc', 80)->nullable();
            $table->string('truyenthongphoihop')->nullable();
            $table->string('tailieuthamkhaophoihop')->nullable();
            $table->string('dulieuhientruongphoihop')->nullable();
            $table->string('chuoilienket')->nullable();
            $table->string('phanloailienquan')->nullable();
            $table->unsignedInteger('sukien_id')->nullable(); // chưa rõ class SuKien?
            $table->string('quychuanlaymau', 100)->nullable();
            $table->string('noluclaymau', 100)->nullable();
            $table->dateTime('ngaysukien')->nullable();
            $table->string('giosukien', 80)->nullable();
            $table->unsignedSmallInteger('ngaybatdaunam')->nullable();
            $table->unsignedSmallInteger('ngaycuoidungnam')->nullable();
            $table->unsignedSmallInteger('nam')->nullable();
            $table->unsignedTinyInteger('thang')->nullable();
            $table->unsignedTinyInteger('ngay')->nullable();
            $table->string('ngaynguyenvan', 80)->nullable();
            $table->string('moitruong', 80)->nullable();
            $table->string('sotruong', 50)->nullable();
            $table->text('ghichutruong')->nullable();
            $table->text('luuysukien')->nullable();
            $table->string('diachatnangcao_id', 60)->nullable();
            $table->string('diachatnangcao', 100)->nullable();
            $table->string('nguonnuoc', 100)->nullable();
            $table->string('quan', 70)->nullable();
            $table->string('dothi', 70)->nullable();
            $table->string('vung', 70)->nullable();
            $table->string('vungnguyenvan')->nullable();
            $table->string('docaonguyenvan', 30)->nullable();
            $table->double('docaotoithieu')->nullable();
            $table->double('docaotoida')->nullable();
            $table->string('dosaunguyengoc', 30)->nullable();
            $table->double('dosautoithieu')->nullable();
            $table->double('dosautoida')->nullable();
            $table->double('kc_toithieu_bm')->nullable();
            $table->double('kc_toida_bm')->nullable();
            $table->string('chuandiadiem', 100)->nullable();
            $table->text('luuydiadiem')->nullable();
            $table->string('toadonguyengoc', 60)->nullable();
            $table->string('vidonguyengoc', 60)->nullable();
            $table->string('kinhdonguyengoc', 60)->nullable();
            $table->string('hetoadogoc', 60)->nullable();
            $table->string('srs_nguyengoc', 50)->nullable();
            $table->double('vido')->nullable();
            $table->double('kinhdo')->nullable();
            $table->double('toadovuonggoc')->nullable();
            $table->double('dochinhxactoado')->nullable();
            $table->double('dochongkhop')->nullable();
            $table->text('mophong_wkt')->nullable();
            $table->text('mophong_srs')->nullable();
            $table->double('dochongkhopmophong')->nullable();
            $table->string('nguoilaptoado', 30)->nullable();
            $table->dateTime('ngaythietlaptoado')->nullable();
            $table->string('dinhchuanthietlap', 80)->nullable();
            $table->text('nguontllaptoado')->nullable();
            $table->string('trangthaikiemdinh', 80)->nullable();
            $table->text('luuythietlap')->nullable();
            $table->string('boicanhdiachat_id', 70)->nullable(); // chưa rõ bảng
            $table->string('diatangthapnhat', 100)->nullable();
            $table->string('diatangcaonhat', 100)->nullable();
            $table->string('kynguyensom', 100)->nullable();
            $table->string('kynguyenmuon', 100)->nullable();
            $table->string('thoikysom', 100)->nullable();
            $table->string('thoikymuon', 100)->nullable();
            $table->string('thoidaisom', 100)->nullable();
            $table->string('thoidaimuon', 100)->nullable();
            $table->string('tuoisom', 60)->nullable();
            $table->string('tuoimuon', 60)->nullable();
            $table->string('sinhdiatangthap', 100)->nullable();
            $table->string('sinhdiatangcao', 100)->nullable();
            $table->text('thachdiatang')->nullable();
            $table->text('nhom')->nullable();
            $table->text('loai')->nullable();
            $table->text('phantu')->nullable();
            $table->text('day')->nullable();
            $table->string('nhandang_id')->nullable();
            $table->string('nguoinhandang', 30)->nullable();
            /*
                Đoạn này chuyển sang bảng bổ sung
            */
            $table->text('thamchieu')->nullable();
            $table->unsignedInteger('phanloaihoc_id');
            $table->unsignedInteger('otieuchuan_id')->nullable();
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->unsignedInteger('tochuc_id')->nullable();
            $table->unsignedSmallInteger('public')->nullable();
            $table->unsignedInteger('hesinhthai_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('bodulieu_id')->references('id')->on('bo_du_lieu')->onUpdate('cascade');
            $table->foreign('phanloaihoc_id')->references('id')->on('phan_loai_hoc')->onUpdate('cascade');
            $table->foreign('otieuchuan_id')->references('id')->on('o_tieu_chuan')->onUpdate('cascade');
            $table->foreign('diadiem_id')->references('id')->on('khu_bao_ton')->onUpdate('cascade');
            // $table->foreign('tochuc_id')->references('id')->on('to_chuc')->onUpdate('casacde');
            $table->foreign('hesinhthai_id')->references('id')->on('he_sinh_thais')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phat_hien_loai');
    }
}
