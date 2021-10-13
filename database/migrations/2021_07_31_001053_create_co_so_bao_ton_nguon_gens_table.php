<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoSoBaoTonNguonGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_so_bao_ton_nguon_gens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('diachi')->nullable();
            $table->text('diagioi')->nullable();
            $table->geometry('khonggian')->nullable();
            $table->unsignedTinyInteger('loaihinh'); // link to TuDien
            $table->double('dientich')->nullable();
            $table->unsignedTinyInteger('loaihinhtochuc'); // link to TuDien
            $table->string('giayphep')->nullable();
            $table->datetime('ngaycap')->nullable();
            $table->string('donvicap')->nullable();
            $table->string('capquanly')->nullable();
            $table->string('chucnang')->nullable();
            $table->text('cosovatchat')->nullable();
            $table->text('nhanluc')->nullable();
            $table->text('taichinh')->nullable();
            $table->text('hinhthucluutru')->nullable();
            $table->unsignedInteger('diadiem_id');
            $table->string('huyen')->nullable();
            $table->string('xa')->nullable();
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
        Schema::dropIfExists('co_so_bao_ton_nguon_gens');
    }
}
