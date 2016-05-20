<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('fullname');
            $table->char('gender', 1);
            $table->integer('medico_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('treatmenttype');
            $table->integer('weight');
            $table->timestamps();

            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('utentes');
    }
}
