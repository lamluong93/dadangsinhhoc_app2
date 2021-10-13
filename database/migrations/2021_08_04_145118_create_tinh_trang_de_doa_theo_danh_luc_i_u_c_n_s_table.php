<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhTrangDeDoaTheoDanhLucIUCNSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinh_trang_de_doa_theo_danh_luc_iucn', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('phanloaihoc_id');
            $table->string('phanhang', 100);
            $table->smallInteger('nam', false, true)->nullable();
            $table->text('ghichu')->nullable();
            
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
        Schema::dropIfExists('tinh_trang_de_doa_theo_danh_luc_iucn');
    }
}
