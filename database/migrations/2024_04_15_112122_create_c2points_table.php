<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC2pointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c2points', function (Blueprint $table) {
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
        Schema::dropIfExists('c2points');
    }
}
