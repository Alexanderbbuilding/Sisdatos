<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('muestra_id')->unsigned();
            $table->string('bandeja',2);
            $table->double('peso_muestra', 10, 1);
            $table->double('humedad_muestra', 15, 8);
            $table->double('total_peso_humedad', 10, 1);
            $table->double('peso_final', 15, 8)->nullable();
            $table->double('adl_porcentaje', 15, 8)->nullable();
            $table->double('humedad_residual', 15, 8)->nullable();
            $table->double('resultado_humedad', 15, 8)->nullable();
            $table->double('peso_final_p', 15, 8)->nullable();
            $table->double('adl_porcentaje_p', 15, 8)->nullable();
            $table->double('humedad_residual_p', 15, 8)->nullable();
            $table->double('resultado_humedad_p', 15, 8)->nullable();
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
        Schema::drop('adls');
    }
}
