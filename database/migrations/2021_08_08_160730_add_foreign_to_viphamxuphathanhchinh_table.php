<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToViphamxuphathanhchinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vi_pham_xu_phat_hanh_chinh_va_hinh_su', function (Blueprint $table) {
            $table->foreign('huyen_id')->references('id')->on('quan_huyen')->onUpdate('cascade');
            $table->foreign('xa_id')->references('id')->on('xa')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vi_pham_xu_phat_hanh_chinh_va_hinh_su', function (Blueprint $table) {
            $table->dropForeign(['huyen_id', 'xa_id']);
        });
    }
}
