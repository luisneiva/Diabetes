<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('notificacao');
            $table->integer('user_id')->unsigned();
            $table->boolean('check');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::drop('notificas');
    }
}
