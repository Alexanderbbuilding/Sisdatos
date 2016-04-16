<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSulphurssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sulphurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('muestra_id')->unsigned();
            $table->double('azufre1', 15, 8)->nullable();
            $table->double('azufre2', 15, 8)->nullable();
            $table->double('promedio_azufre', 15, 8);
            $table->double('repetibilidad_azufre', 15, 8);
            $table->double('limite_rep_azufre', 15, 8);
            $table->string('analista',100);
            $table->timestamps();

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
        Schema::drop('sulphurs');
    }
}
