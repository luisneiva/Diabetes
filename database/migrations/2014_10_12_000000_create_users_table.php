<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('fullname');
            $table->char('sex', 1);
            $table->integer('medico_id')->unsigned();
            $table->string('email')->unique();
            $table->string('type');
            $table->string('treatmenttype');
            $table->integer('weight');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


                  $table->foreign('medico_id')->references('id')->on('medicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
