<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSugeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sugeres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sugestao');
            $table->integer('user_id');

            $table->timestamps();

             // TODO
            // acrescentar foreign medico e utente
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sugeres');
    }
}
