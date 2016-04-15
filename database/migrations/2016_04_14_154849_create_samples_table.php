<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manto_minas_id')->unsigned();
            $table->integer('tipo_muestra_id')->unsigned();
            $table->integer('destino_muestra_id')->unsigned();
            $table->integer('tipo_mezcla_id')->unsigned();
            $table->integer('plantas_id')->unsigned();
            $table->integer('coque_terminado_id')->unsigned();
            $table->string('consecutivo',100);
            $table->string('annio',10);
            $table->string('codigo_muestra');
            $table->timestamps();

            $table->foreign('manto_minas_id')->references('id')->on('mantle_mines');
            $table->foreign('tipo_muestra_id')->references('id')->on('sample_types');
            $table->foreign('destino_muestra_id')->references('id')->on('destinations');
            $table->foreign('tipo_mezcla_id')->references('id')->on('mix_types');
            $table->foreign('plantas_id')->references('id')->on('plants');
            $table->foreign('coque_terminado_id')->references('id')->on('finished_cokes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('samples');
    }
}
