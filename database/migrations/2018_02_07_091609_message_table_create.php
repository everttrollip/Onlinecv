<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MessageTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('messenger_threads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 95);
            $table->dateTime('date_added');
            $table->timestamps();
        });

        Schema::create('messenger_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->integer('thread_id')->unsigned();
            $table->foreign('thread_id')
            ->references('id')->on('messenger_threads');
            $table->dateTime('last_read');
            $table->timestamps();
        });

        Schema::create('messenger_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->integer('thread_id')->unsigned();
            $table->foreign('thread_id')
            ->references('id')->on('messenger_threads');
            $table->string('body', 950)->nullable();
            $table->string('type', 255)->nullable();
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
        //
    }
}
