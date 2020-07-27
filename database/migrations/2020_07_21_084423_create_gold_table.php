<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('price');
            $table->string('stop');
            $table->string('profit');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->string('city');
            $table->string('time');
            $table->string('info');
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
        Schema::dropIfExists('gold');
    }
}
