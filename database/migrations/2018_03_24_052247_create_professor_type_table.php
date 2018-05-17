<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->string('gender'); //female - male - not defined
            $table->enum('self_eval', ['B', 'I', 'A']);
            $table->integer('teacher_period');
            $table->enum('expertise_area', ['DM', 'ND', 'OT']);
            $table->enum('computer_skill', ['L', 'A', 'H']); //low - average - high
            $table->enum('web_based_tech_experience', ['N', 'S', 'O']); //never - sometimes - often 
            $table->enum('website_experience', ['N', 'S', 'O']); //never - sometimes - often   
            $table->string('class'); //beginner - intermediate - advanced   
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
        Schema::dropIfExists('professor_type');
    }
}
