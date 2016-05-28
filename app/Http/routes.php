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

Route::get('/', function () {
    return view('welcome');
});

// funcionalidades  admin
Route::group(['middleware' => 'auth'], function () {

    // Refeicao
    Route::resource('refeicao', 'RefeicaoController');

    // Registo diario
    Route::resource('registo', 'RegistoDiarioController');

     // Exercicio diario
    Route::resource('exerDiario', 'ExercicioDiarioController');

    //Graficos
    //Route::resource('grafico', 'GraficoController@index');

    //Notificações
    Route::resource('notifica', 'NotificaController');

    //Sugestões
    Route::resource('sugere', 'SugereController');

    //Grafico do utente
    Route::resource('grafico', 'GraficoController');

    //Utente
    Route::resource('utente', 'UtenteController');




    Route::get('/home', function () {
        $user = Auth::user();

        if ($user->type == 1) { // medico
            return redirect()->route('medico.show', $user->id);
        } else { // utente
            if ($user->utente === null) { return redirect()->route('utente.create'); }

            return redirect()->route('utente.show', $user->utente->id);
        }
    });

    // funcionalidades dos utentes
    Route::group(['middleware' => 'newUtente'], function () {

        // Utente
        Route::resource('utente', 'UtenteController');

        // Registo diario
        Route::get('dicas', 'UtenteController@dicas');

        //Página de refeições do utente
        Route::get('pageRefeicao', 'RefeicaoController@pageRefeicao');

        //Página para exercicios do utente
        Route::get('pageExercicio', 'ExercicioController@pageExercicio');
        
        // Refeicao
        Route::resource('refeicao', 'RefeicaoController');

        // AQUI
    });

    // permite submeter o formulario do registo do utente (initial)
    Route::resource('utente', 'UtenteController', ['only' => 'store']);
    
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

Route::auth();


