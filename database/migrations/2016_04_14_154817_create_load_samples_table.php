<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('load_samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_muestra_id')->unsigned();
            $table->integer('minas_id')->unsigned();
            $table->string('codigo_carga',45);
            $table->timestamps();
            
            $table->foreign('tipo_muestra_id')->references('id')->on('sample_types');
            $table->foreign('minas_id')->references('id')->on('mines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('load_samples');
    }
}
