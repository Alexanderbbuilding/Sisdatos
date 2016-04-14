<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantleMinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantle_mines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('minas_id')->unsigned();
            $table->integer('mantos_id')->unsigned();
            $table->timestamps();

            $table->foreign('minas_id')->references('id')->on('mines');
            $table->foreign('mantos_id')->references('id')->on('mantles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mantle_mines');
    }
}
