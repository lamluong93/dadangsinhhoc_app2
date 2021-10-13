<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuongTrinhDeTaiDuAnKiemSoatSVNLXHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuong_trinh_de_tai_du_an_kiem_soat_svnlxh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->text('noidung')->nullable();
            $table->datetime('thoigianbatdau')->nullable();
            $table->datetime('thoigianketthuc')->nullable();
            $table->string('donvithuchien')->nullable();
            $table->string('spchinh')->nullable();
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
        Schema::dropIfExists('chuong_trinh_de_tai_du_an_kiem_soat_svnlxh');
    }
}
