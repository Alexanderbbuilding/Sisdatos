<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAshDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ash_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cenizas_id')->unsigned();
            $table->string('crisol',3);
            $table->double('crisol_vacio', 15, 8);
            $table->double('muestra_humeda', 15, 8);
            $table->double('seca_mas_crisol', 15, 8);
            $table->double('resultados', 10, 4);
            $table->double('promedio', 10, 2);
            $table->double('repetibilidad', 15, 8);
            $table->double('limite_repetibilidad', 15, 8);
            $table->string('observaciones',150);
            $table->timestamps();

            $table->foreign('cenizas_id')->references('id')->on('ashes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ash_details');
    }
}
