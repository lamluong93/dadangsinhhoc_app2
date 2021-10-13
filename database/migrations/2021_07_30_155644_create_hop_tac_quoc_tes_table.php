<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopTacQuocTesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_tac_quoc_te', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten')->nullable();
            $table->unsignedTinyInteger('tinhchat'); // link to TuDien
            $table->datetime('ngaybanhanh')->nullable();
            $table->datetime('ngayhieuluc')->nullable();
            $table->string('thoihanhieuluc')->nullable();
            $table->string('tendoitacnn')->nullable(); // đối tác nước ngoài
            $table->unsignedTinyInteger('phancap'); // phân cấp, link to TuDien
            $table->unsignedTinyInteger('danhnghia'); // Danh nghĩa, link to TuDien
            $table->string('coquanchutri')->nullable();
            $table->string('nguoiki')->nullable();
            $table->datetime('thoigianketthuc')->nullable();
            $table->unsignedTinyInteger('tinhtrang'); // link to TuDien
            $table->string('noidungchinh')->nullable();
            $table->text('noidung')->nullable();
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
        Schema::dropIfExists('hop_tac_quoc_te');
    }
}
