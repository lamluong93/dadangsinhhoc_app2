<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriThucTruyenThongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tri_thuc_truyen_thong', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('nhom'); //TuDien
            $table->string('ten', 200)->nullable();
            $table->string('nguoiluutru', 300)->nullable();
            $table->unsignedInteger('noiluugiu_id')->nullable();
            $table->text('mota')->nullable();
            $table->unsignedSmallInteger('soluonggen')->nullable();
            $table->string('capchungnhan', 300)->nullable();
            $table->text('ghichu')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('noiluugiu_id')->references('id')->on('thong_tin_luu_tru_nguon_gen')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tri_thuc_truyen_thong');
    }
}
