<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('gender')->nullable();
            $table->string('teens')->nullable();
            $table->longText('diagnosis')->nullable();
            $table->string('diagonsis_condition')->nullable();
            $table->string('active')->nullable();
            $table->longText('describe')->nullable();
            $table->string('body_type')->nullable();
            $table->string('doctor')->nullable();
            $table->string('doctor_name')->nullable();

            $table->string('qualification')->nullable();
            $table->string('service_time')->nullable();
            $table->string('business_name')->nullable();
            $table->string('typical_patients')->nullable();

            $table->enum('type', ['patient', 'physician']);


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
        Schema::dropIfExists('quizzes');
    }
}
