<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC2subjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c2subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mamonhoc');
            $table->string('tenmonhoc');
            $table->string('sotinchi');
            $table->string('nguoiday');
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
        Schema::dropIfExists('c2subjects');
    }
}
