<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_alimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('refeicao_id')->unsigned();
            $table->integer('alimento_id')->unsigned();
            $table->integer('qtd');


            $table->foreign('refeicao_id')->references('id')->on('refeicaos');
            $table->foreign('alimento_id')->references('id')->on('alimentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ref_alimentos');
    }
}
