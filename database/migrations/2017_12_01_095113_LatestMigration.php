<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LatestMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*
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
        Schema::create('voucher_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')
            ->references('id')->on('administrators')
            ->onDelete('cascade');
            $table->decimal('price', 45)->default(350.00);
            $table->timestamps();
        });*/

        // Schema::create('orders', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('user_id')->unsigned()->nullable();
        //     $table->foreign('user_id')
        //     ->references('id')->on('users');
        //     $table->double('total_amount', 10,2);
        //     $table->string('payment_status')->default('');
        //     $table->timestamps();
        // });

        // Schema::create('vouchers', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('admin_id')->unsigned();
        //     $table->foreign('admin_id')
        //     ->references('id')->on('administrators')
        //     ->onDelete('cascade');
        //     $table->integer('user_using_voucher')->unsigned()->nullable();
        //     $table->foreign('user_using_voucher')
        //     ->references('id')->on('users');
        //     $table->integer('order_id');
        //     $table->foreign('order_id')
        //     ->references('id')->on('orders');
        //     $table->string('voucher', 95)->unique();
        //     $table->string('active', 1)->default('');
        //     $table->timestamps();
        // });

        Schema::create('admin_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')
            ->references('id')->on('administrators');
            $table->integer('student_id')->unsigned()->nullable();
            $table->foreign('student_id')
            ->references('id')->on('students');
            $table->integer('voucher_id')->unsigned()->nullable();
            $table->foreign('voucher_id')
            ->references('id')->on('vouchers');
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
