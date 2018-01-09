<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MessageTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned()->nullable();
            $table->foreign('sender_id')
            ->references('id')->on('users');
            $table->integer('receiver_id')->unsigned()->nullable();
            $table->foreign('receiver_id')
            ->references('id')->on('users');
            $table->string('sender', 45)->nullable();
            $table->string('receiver', 45)->nullable();
            $table->string('message', 900)->nullable();
            $table->integer('read')->unsigned()->default(0);
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
