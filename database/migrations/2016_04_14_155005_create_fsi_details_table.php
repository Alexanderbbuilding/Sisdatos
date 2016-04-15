<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFsiDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsi_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fsi_id')->unsigned();
            $table->string('boton',50);
            $table->double('peso', 15, 8);
            $table->double('perfil', 15, 8);
            $table->timestamps();

            $table->foreign('fsi_id')->references('id')->on('fsis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fsi_details');
    }
}
