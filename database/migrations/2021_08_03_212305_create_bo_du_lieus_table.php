<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoDuLieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_du_lieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude');
            $table->dateTime('ngaycongbo');
            $table->string('ngonngu');
            $table->string('series')->nullable();
            $table->text('tomtat')->nullable();
            $table->text('thongtinbosung')->nullable();
            $table->string('quyensohuutritue');
            $table->text('phanloai')->nullable();
            $table->string('dophu')->nullable();
            $table->string('websitelink')->nullable();
            $table->string('logo_url')->nullable();
            $table->text('trichdan')->nullable();
            $table->text('motadialy')->nullable();
            $table->string('tukhoa')->nullable();
            $table->string('tukhoadongnghia')->nullable();
            $table->dateTime('ngaybatdau');
            $table->dateTime('ngayketthuc')->nullable();
            $table->string('dophuphanloai')->nullable();
            $table->double('toadotay')->nullable();
            $table->double('toadodong')->nullable();
            $table->double('toadobac')->nullable();
            $table->double('toadonam')->nullable();
            $table->string('tenfilegoc')->nullable();
            $table->string('tenfile')->nullable();
            $table->unsignedInteger('tochuc_id'); // ref tochuc (organization)
            $table->string('diadiem');
            $table->string('loaibodulieu');
            $table->string('trangthai')->nullable();
            $table->string('chuanphanloai')->nullable();
            
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
        Schema::dropIfExists('bo_du_lieu');
    }
}
