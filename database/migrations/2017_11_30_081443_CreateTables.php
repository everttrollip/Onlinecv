<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('firstname', 45);
            $table->string('lastname', 45);
            $table->string('email', 90)->unique();
            $table->string('password');
            $table->string('role', 45);
            $table->string('avatar', 500)->nullable();
            $table->string('activated', 1);
            $table->string('activation_token');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('firstname', 45);
            $table->string('lastname', 45);
            $table->string('email', 90)->unique();
            $table->string('voucher', 45)->default('');
            $table->string('id_number', 45)->default('');
            $table->date('dob')->nullable();
            $table->string('address', 90)->default('');
            $table->string('area', 90)->default('');
            $table->string('town', 90)->default('');
            $table->string('province', 90)->default('');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('firstname', 45);
            $table->string('lastname', 45);
            $table->string('email', 90)->unique();

            $table->string('voucher', 45)->default('');
            $table->string('id_number', 45)->default('');
            $table->date('dob')->nullable();
            $table->string('school', 90)->default('');;
            $table->string('address', 90)->default('');;
            $table->string('town', 90)->default('');;
            $table->string('province', 90)->default('');;
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')
            ->references('id')->on('administrators')
            ->onDelete('cascade');
            $table->string('voucher', 45)->default('');
            $table->integer('active', 1)->default(0);
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
        //
    }
}
