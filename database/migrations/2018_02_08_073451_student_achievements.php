<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentAchievements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create Table
        Schema::create('student_achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')
            ->references('id')->on('students');
            $table->string('title', 95);
            $table->string('description', 1000)->nullable();
            $table->dateTime('date')->nullable();
            $table->string('category', 45)->nullable();
            $table->integer('reviewed');
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
