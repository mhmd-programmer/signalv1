<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBineriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bineries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pips');
            $table->string('number');
            $table->integer('time');
            $table->text('hour');
            $table->string('date');
            $table->string('status');
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
        Schema::dropIfExists('bineries');
    }
}
