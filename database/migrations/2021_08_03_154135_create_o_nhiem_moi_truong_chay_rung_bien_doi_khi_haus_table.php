<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateONhiemMoiTruongChayRungBienDoiKhiHausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('loaihinh'); // tudien
            $table->string('doituongbitacdong');
            $table->string('tansuat')->nullable();
            $table->string('hauqua')->nullable();
            $table->double('dientich')->nullable();
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->unsignedSmallInteger('thoigian')->nullable();
            $table->unsignedInteger('huyen_id')->nullable();
            $table->unsignedInteger('xa_id')->nullable();
            $table->string('nguondulieu')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('diadiem_id')->references('id')->on('khu_bao_ton')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau');
    }
}
