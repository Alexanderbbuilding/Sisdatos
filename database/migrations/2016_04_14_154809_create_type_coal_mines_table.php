<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeCoalMinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_coal_mines', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_fin');
            $table->integer('minas_id')->unsigned();
            $table->integer('tipo_carbon_id')->unsigned();
            $table->timestamps();

            $table->foreign('minas_id')->references('id')->on('mines');
            $table->foreign('tipo_carbon_id')->references('id')->on('coal_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('type_coal_mines');
    }
}
