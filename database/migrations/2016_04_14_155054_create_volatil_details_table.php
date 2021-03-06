<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolatilDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volatil_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('volatil_id')->unsigned();
            $table->string('crisol',3);
            $table->double('crisol_vacio', 15, 8);
            $table->double('muestra_humeda', 15, 8);
            $table->double('seca_mas_crisol', 15, 8)->nullable();
            $table->double('resultados', 10, 4)->nullable();
            $table->double('promedio', 10, 2)->nullable();
            $table->double('repetibilidad', 15, 8)->nullable();
            $table->double('limite_repetibilidad', 15, 8)->nullable();
            $table->string('observaciones',150)->nullable();
            $table->timestamps();

            $table->foreign('volatil_id')->references('id')->on('volatiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volatil_details');
    }
}
