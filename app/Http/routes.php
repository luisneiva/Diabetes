<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

// Refeicao
    Route::resource('refeicao', 'RefeicaoController');

});
// Medico
    Route::resource('medico', 'MedicoController');

// Bebida
    Route::resource('bebida', 'BebidaController');

// Alimento
    Route::resource('alimento', 'AlimentoController');

// Exercicio
    Route::resource('exercicio', 'ExercicioController');

// Medico
  Route::resource('medico', 'MedicoController');

  // Refeicao
    Route::resource('refeicao', 'RefeicaoController');

  Route::get('/home', 'HomeController@index');

Route::auth();


