<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguonGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguon_gen', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loainguongen_id');
            $table->string('ten', 200);
            $table->string('tenthongthuong', 200)->nullable();
            $table->string('tendantoc', 200)->nullable();
            $table->string('tenkhoahoc', 200)->nullable();
            $table->string('dacdiem')->nullable();
            $table->string('maso_qg', 20)->nullable();
            $table->string('masotinh', 15)->nullable(); 
            $table->unsignedTinyInteger('tinhtrangluugiu'); // ko ro
            $table->unsignedTinyInteger('tinhtrangnghiencuu'); // tudien
            $table->unsignedTinyInteger('tinhtrangsudung')->nullable();
            $table->unsignedTinyInteger('nguongoc')->nullable();
            $table->string('xuatxu')->nullable();
            $table->unsignedTinyInteger('phuongthucluutru')->nullable();
            $table->double('dientichluutru')->nullable();
            $table->string('vatlieuditruyenluutru')->nullable();
            $table->integer('slvatlieuditruyen', false, true)->nullable();
            $table->unsignedSmallInteger('thoigianbatdauluugiu')->nullable();
            $table->string('hinhthucbaoquan', 150)->nullable();
            $table->unsignedTinyInteger('genquyhiem')->nullable();
            $table->unsignedTinyInteger('banchatditruyen')->nullable(); // tudien
            $table->unsignedTinyInteger('tinhtrang')->nullable();
            $table->string('bienphapbaoton')->nullable();
            $table->string('khanangtiepcan')->nullable();
            $table->text('quytrinhtiepcan')->nullable();
            $table->unsignedTinyInteger('genco_dk')->nullable();
            $table->text('ghichu')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('loainguongen_id')->references('id')->on('loai_nguon_gen')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguon_gen');
    }
}
