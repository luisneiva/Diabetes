<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefeicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refeicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('alimento_id')->unsigned();
            $table->integer('bebida_id')->unsigned();
            $table->integer('qtd_bebida');
            $table->integer('qtd_alimento');
            $table->double('total_carboidratos');
            $table->double('total_calorias');
            $table->double('total_proteinas');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('alimento_id')->references('id')->on('alimentos');
            $table->foreign('bebida_id')->references('id')->on('bebidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('refeicaos');
    }
}
