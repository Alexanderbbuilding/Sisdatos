<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdlPesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adl_pesos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adl_id')->unsigned();
            $table->double('peso', 15, 8);
            $table->double('por_per_hum', 15, 8);
            $table->string('hora_minutos',10);
            $table->timestamps();

            $table->foreign('adl_id')->references('id')->on('adls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adl_pesos');
    }
}
