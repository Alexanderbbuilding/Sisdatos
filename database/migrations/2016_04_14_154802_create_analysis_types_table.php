<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalysisTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysis_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('norma_id')->unsigned();
            $table->string('codigo',10);
            $table->string('descripcion');
            $table->string('descripcion_corta',50);
            $table->integer('tiempo_entrega');
            $table->string('unidad',10);
            $table->string('automatizado',1);
            $table->timestamps();

            $table->foreign('norma_id')->references('id')->on('rules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('analysis_types');
    }
}
