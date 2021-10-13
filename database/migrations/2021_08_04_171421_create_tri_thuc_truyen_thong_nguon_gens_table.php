<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriThucTruyenThongNguonGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tri_thuc_truyen_thong_nguon_gen', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguongen_id')->nullable();
            $table->unsignedInteger('trithuctruyenthong_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('nguongen_id')->references('id')->on('nguon_gen')->onUpdate('cascade');
            $table->foreign('trithuctruyenthong_id')->references('id')->on('tri_thuc_truyen_thong')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tri_thuc_truyen_thong_nguon_gen');
    }
}
