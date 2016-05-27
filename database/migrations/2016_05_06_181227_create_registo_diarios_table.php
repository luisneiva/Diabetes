<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistoDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registo_diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('glicose')->nullable();
            $table->integer('total_carboidratos_ingeridos');
            $table->integer('total_proteinas_ingeridas');
            $table->integer('total_calorias_ingeridas');
            $table->integer('calorias_gastas');
            $table->integer('carboidratos_gastos');
            $table->integer('proteinas_gastas');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('registo_diarios');
    }
}
