<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_bebidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('refeicao_id')->unsigned();
            $table->integer('bebida_id')->unsigned();
            $table->integer('qtd');

            $table->foreign('refeicao_id')->references('id')->on('refeicaos');
            $table->foreign('bebida_id')->references('id')->on('bebidas');
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
        Schema::drop('ref_bebidas');
    }
}
