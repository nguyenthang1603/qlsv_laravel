<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT1pointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t1points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('masv');
            $table->string('mamonhoc');
            $table->string('diemcc');
            $table->string('diemgk');
            $table->string('diemck');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t1points');
    }
}
