<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeographicalDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geographical_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manto_minas_id')->unsigned();
            $table->string('explotador',100);
            $table->string('fuente',100);
            $table->integer('columna1');
            $table->string('unidad',50);
            $table->double('espesor_util', 15, 8);
            $table->double('e', 15, 8);
            $table->double('n', 15, 8);
            $table->double('altura', 15, 8);
            $table->double('azumit', 15, 8);
            $table->double('buzamiento', 15, 8);
            $table->string('cuadrante_buz',45);
            $table->double('espesor', 15, 8);
            $table->double('litoestratigrafia', 15, 8);
            $table->timestamps();

            $table->foreign('manto_minas_id')->references('id')->on('mantle_mines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('geographical_descriptions');
    }
}
