<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proveedor_id')->unsigned();
            $table->integer('seccion_estratografica_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('proveedor_id')->references('id')->on('providers');
            $table->foreign('seccion_estratografica_id')->references('id')->on('stratigraphic_sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mines');
    }
}
