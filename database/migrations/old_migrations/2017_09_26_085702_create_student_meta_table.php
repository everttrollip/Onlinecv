<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_meta', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->integer('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('firstname', 45);
            $table->string('latsname',45);
            $table->string('id_number', 45);
            $table->date('dob');
            $table->string('school', 90);
            $table->string('address', 90);
            $table->string('town', 90);
            $table->string('province', 90);
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
