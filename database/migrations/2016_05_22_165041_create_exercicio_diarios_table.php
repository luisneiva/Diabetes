<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio_diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exercicio_id')->unsigned();
            $table->date('data');
            $table->integer('tempo_gasto');
            $table->integer('calorias_gastas');
            $table->timestamps();

            $table->foreign('exercicio_id')->references('id')->on('exercicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exercicio_diarios');
    }
}
