<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalysisDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysis_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_analisis_id')->unsigned();
            $table->integer('norma_id')->unsigned();
            $table->string('descripcion',100);
            $table->string('unidad',5);
            $table->timestamps();

            $table->foreign('tipo_analisis_id')->references('id')->on('analysis_types');
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
        Schema::drop('analysis_details');
    }
}
