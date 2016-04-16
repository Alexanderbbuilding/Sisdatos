<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalorificPowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calorific_powers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('muestra_id')->unsigned();
            $table->double('qvad1', 15, 8);
            $table->double('qvad2', 15, 8);
            $table->string('analista',100)->nullable();
            $table->timestamps();

            $table->foreign('muestra_id')->references('id')->on('samples');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calorific_powers');
    }
}
