<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAnalysisSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_analysis_samples', function (Blueprint $table) {
            $table->integer('tipo_analisis_id')->unsigned();
            $table->integer('muestra_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipo_analisis_id')->references('id')->on('analysis_types');
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
        Schema::drop('type_analysis_samples');
    }
}
