<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhaiThacQuaMucChoPhepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khai_thac_qua_muc_cho_phep', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('phanloai'); // tudien
            $table->unsignedTinyInteger('sinhvatkhaithac')->nullable(); // tudien
            $table->unsignedTinyInteger('bienphapkhaithac')->nullable(); // tudien
            $table->unsignedTinyInteger('lopphukt')->nullable(); // tudien
            $table->double('dientichkt')->nullable();
            $table->integer('soluongsv', false, true)->nullable();
            $table->string('donvitinhsoluong', 80)->nullable();
            $table->double('khoiluongsv')->nullable();
            $table->string('donvitinhkhoiluong', 80)->nullable();
            $table->text('iucn')->nullable();
            $table->text('cites')->nullable();
            $table->text('sachdovietnam')->nullable();
            $table->text('nghidinh64')->nullable();
            $table->text('nghidinh06')->nullable();
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->timestamp('thoigian')->nullable();
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
        Schema::dropIfExists('khai_thac_qua_muc_cho_phep');
    }
}
