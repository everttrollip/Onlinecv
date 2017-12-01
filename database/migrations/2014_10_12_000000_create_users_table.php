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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id', 11);
        //     $table->string('firstname', 45);
        //     $table->string('lastname', 45);
        //     $table->string('email', 90)->unique();
        //     $table->string('password');
        //     $table->string('role', 45);
        //     $table->integer('activated', 1)->default(0);
        //     $table->string('activation_token');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
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
