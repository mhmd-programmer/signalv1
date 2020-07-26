<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('google_id')->default('سیگنال بدم از تاریخ 11/MAY/2020 شروع به کار میکند');
            $table->string('email')->unique();
            $table->string('role')->default('user');
            $table->string('password');
            $table->string('timezone')->default('Asia/Tehran');
            $table->string('rate')->default('free');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
