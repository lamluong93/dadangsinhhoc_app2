<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinhPhisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinh_phi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('nguonkinhphi');
            $table->text('mucdichsudung')->nullable();
            $table->double('tyle')->nullable();
            $table->smallInteger('thoigian');
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
        Schema::dropIfExists('kinh_phi');
    }
}
