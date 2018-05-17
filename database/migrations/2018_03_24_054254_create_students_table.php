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
            $table->string('campus', 50)->default('Paraiso');
            $table->string('gender')->default('F');
            $table->double('average_grade')->default(7.5); 
            $table->integer('ca')->default(0);
            $table->integer('ec')->default(0);
            $table->integer('ea')->default(0);
            $table->integer('_or')->default(0);
            $table->integer('ca_ec')->default(0);
            $table->integer('ea_or')->default(0);
            $table->string('style', 50)->default('CONVERGENTE'); //DIVERGENTE, CONVERGENTE, ASIMILADOR, ACOMODADOR 
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
