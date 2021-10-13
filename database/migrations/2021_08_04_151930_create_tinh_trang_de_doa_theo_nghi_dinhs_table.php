<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhTrangDeDoaTheoNghiDinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinh_trang_de_doa_theo_nghi_dinh', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('phanloaihoc_id');
            $table->string('nghidinh', 150);
            $table->text('ghichu')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            $table->foreign('phanloaihoc_id', 'dedoatheonghidinh_phanloaihoc_id_foreign')->references('id')->on('phan_loai_hoc')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinh_trang_de_doa_theo_nghi_dinh');
    }
}
