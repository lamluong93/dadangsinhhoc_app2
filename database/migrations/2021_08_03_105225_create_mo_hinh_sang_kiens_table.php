<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoHinhSangKiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mo_hinh_sang_kien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->unsignedTinyInteger('hinhthuc'); // link to TuDien
            $table->text('noidung')->nullable();
            $table->unsignedInteger('coquan_id')->nullable();
            $table->text('diadiemtochuc')->nullable();
            $table->datetime('tgbatdau')->nullable();
            $table->datetime('tgketthuc')->nullable();
            $table->text('ketquaapdung')->nullable();
            $table->text('ghichu')->nullable();
            
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
        Schema::dropIfExists('mo_hinh_sang_kien');
    }
}
