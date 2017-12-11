<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('voucher', 45)->default('');

            // Personal Details
            $table->string('firstname', 45)->default('');;
            $table->string('lastname', 45)->default('');;
            $table->string('email', 90)->unique();
            $table->string('contact', 45)->default('');;
            $table->string('id_number', 45)->default('');
            $table->date('dob')->nullable();
            $table->string('province', 90)->default('');;
            $table->string('town', 90)->default('');
            $table->string('address', 90)->default('');
            $table->string('tagline', 250)->default('');

            // Education
            $table->string('school', 90)->default('');
            $table->string('grade', 5)->default('12');
            $table->text('subjects');
            $table->boolean('varsity_exempt')->default(true);
            $table->text('preferred_study_locations');

            // // Additional information
            $table->integer('arts')->default(0);
            $table->integer('sports')->default(0);
            $table->integer('events')->default(0);
            $table->integer('communication')->default(0);
            $table->integer('conceptualization')->default(0);
            $table->integer('creativity')->default(0);
            $table->integer('leadership')->default(0);
            $table->text('career_interests');
            $table->text('general_interests');

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
        Schema::dropIfExists('students');
    }
}
