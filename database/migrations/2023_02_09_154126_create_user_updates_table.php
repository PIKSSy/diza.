<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_updates', function (Blueprint $table) {
            $table->foreignId('user')->references('user_id')->on('users');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->date('birthday');
            $table->string('gender');
            $table->foreignId('language')->references('lang_id')->on('languages');
            $table->dateTime('modified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_updates');
    }
};
