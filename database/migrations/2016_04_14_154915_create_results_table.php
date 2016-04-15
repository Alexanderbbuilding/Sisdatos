<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('muestra_id')->unsigned();
            $table->integer('detalles_analisis_id')->unsigned();
            $table->string('descripcion',500);
            $table->string('base_recibe',45);
            $table->string('base_determina',45);
            $table->string('base_seca',45);
            $table->string('resultado',45);
            $table->string('resultado_final',45);
            $table->string('unidad',45);
            $table->timestamps();

            $table->foreign('muestra_id')->references('id')->on('samples');
            $table->foreign('detalles_analisis_id')->references('id')->on('analysis_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('results');
    }
}
