<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnViphamxuphathcvahinhsuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vi_pham_xu_phat_hanh_chinh_va_hinh_su', function (Blueprint $table) {
            $table->dropColumn('hinhvixuly');
            $table->string('hinhthucxuly', 100)->nullable()->after('noidungvipham');
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
            //
        });
    }
}
