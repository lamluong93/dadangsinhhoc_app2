<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaoCaoApLucLenDDSHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bao_cao_ap_luc_len_ddsh', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('thongso_id');
            $table->double('soluong')->nullable();
            $table->string('donvitinhsoluong', 60)->nullable();
            $table->double('khoiluong')->nullable();
            $table->string('donvitinhkhoiluong')->nullable();
            $table->double('dientich')->nullable();
            $table->string('mota')->nullable();
            $table->unsignedTinyInteger('phancap'); // link to TuDien
            $table->string('tendonvi')->nullable();
            $table->string('kybaocao')->nullable();
            $table->datetime('thoigianbatdau')->nullable();
            $table->datetime('thoigianketthuc')->nullable();
            $table->text('ghichu')->nullable();
            $table->string('nguondulieu')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('thongso_id')->references('id')->on('danh_muc_thong_so')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bao_cao_ap_luc_len_ddsh');
    }
}