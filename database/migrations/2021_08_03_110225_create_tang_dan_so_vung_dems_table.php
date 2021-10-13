<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTangDanSoVungDemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tang_dan_so_vung_dem', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('danso');
            $table->double('tyletang');
            $table->unsignedInteger('diadiem_id')->nullable();
            $table->datetime('thoigiankhaosat')->nullable();
            $table->string('kybaocao')->nullable();
            $table->datetime('tgbatdau')->nullable();
            $table->datetime('tgketthuc')->nullable();
            $table->unsignedInteger('huyen_id')->nullable();
            $table->unsignedInteger('xa_id')->nullable();
            $table->string('nguondulieu')->nullable();
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
        Schema::dropIfExists('tang_dan_so_vung_dem');
    }
}
