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
            $table->('notificacao');
            $table->('user_id');
            $table->('medico_id');
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
        Schema::drop('notificas');
    }
}
