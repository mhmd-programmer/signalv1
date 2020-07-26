<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pip');
            $table->string('pips');
            $table->string('symbol');
            $table->string('price');
            $table->string('stop');
            $table->string('profit');
            $table->string('status');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->string('city');
            $table->string('time');
            $table->integer('number');
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
        Schema::dropIfExists('signals');
    }
}
