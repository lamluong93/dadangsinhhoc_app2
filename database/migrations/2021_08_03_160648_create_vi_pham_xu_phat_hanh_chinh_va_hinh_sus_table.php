<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViPhamXuPhatHanhChinhVaHinhSusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vi_pham_xu_phat_hanh_chinh_va_hinh_su', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doituongvipham');
            $table->unsignedTinyInteger('hinhvivipham'); // tudien
            $table->string('noidungvipham')->nullable();
            $table->unsignedTinyInteger('hinhvixuly')->nullable(); // tudien
            $table->integer('soluongloaitichthu', false, true)->nullable();
            $table->integer('soluongcathtichthu', false, true)->nullable();
            $table->integer('khoiluongcathetichthu', false, true)->nullable();
            $table->unsignedSmallInteger('thoigian')->nullable();
            $table->unsignedInteger('huyen_id')->nullable();
            $table->unsignedInteger('xa_id')->nullable();
            $table->string('nguondulieu')->nullable();
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
        Schema::dropIfExists('vi_pham_xu_phat_hanh_chinh_va_hinh_su');
    }
}
