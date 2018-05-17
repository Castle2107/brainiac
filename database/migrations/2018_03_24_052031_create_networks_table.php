<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reliability')->default(2); //2,3,4,5
            $table->integer('num_links')->default(7); //7,8,9,...20
            $table->enum('capacity', ['low', 'medium', 'high'])->default('low');
            $table->enum('cost', ['low', 'medium', 'high'])->default('low');
            $table->char('class', 1)->default('A'); //A: advanced, B: beginner
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
        Schema::dropIfExists('networks');
    }
}
