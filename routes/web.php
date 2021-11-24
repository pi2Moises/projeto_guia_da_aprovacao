<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/*home page*/
Route::get('/home', 'HomeController@index')->name('home');

/*rotas de planos/cronogramas */
Route::get('/plano', 'CronogramaController@index');
Route::get('/visualizar_plano', 'CronogramaController@exibir');
Route::get('/detalhe_plano/{id}', 'CronogramaController@detalhe');
Route::post('/cadastro_cronograma', 'CronogramaController@store');

/*rotas de gerenciamento dos planos*/
Route::get('/edit_cronograma/{id}', 'CronogramaController@edit');

/*rotas disciplinas*/
Route::get('/disciplina/{id}', 'DisciplinaController@index');
Route::post('/add-disciplina', 'DisciplinaController@store');


/*rotas exercícios - desempenho*/
Route::get('/exercicio/desempenho', 'ExercicioController@index');

/*rotas quadro horario*/
Route::get('/quadro_horario/{id}', 'QuadroHorarioController@index');
Route::get('/cad-quadro/{id}', 'QuadroHorarioController@create');
Route::get('/edit-quadro/{id}/{id_plano}/{disciplina}', 'QuadroHorarioController@edit');
Route::post('/edit-quadro/{id}', 'QuadroHorarioController@update');
Route::post('/add-quadro', 'QuadroHorarioController@store');


/*rotas de edital verticalizado*/
Route::get('/verticalizado/{id}', 'VerticalizadoController@index');


/*rotas Cronometro*/
Route::get('/cronometro', 'CronometroController@index');



/*Histórico de Concurso*/
Route::get('/verHistorico', 'HistConcursoControle@index');
Route::get('/hist_concurso', 'HistConcursoControle@create');
Route::post('/hist_concurso', 'HistConcursoControle@store');
Route::get('/edit_concurso/{id}', 'HistConcursoControle@edit');
Route::post('/edit_concurso/{id}', 'HistConcursoControle@update');
Route::delete('/delete_concurso/{id}', 'HistConcursoControle@destroy');


/*Rotas de frases Motivacionais*/

//aqui não há ACTION/INDEX, os dados estão sendo exibidos na HOME.
Route::get('/home', 'MotivacionalController@index');
Route::get('/Cad_frase_Motivacional', 'MotivacionalController@create');
Route::post('/Cad_frase_Motivacional', 'MotivacionalController@store');


/*Gerenciamento de Rotas de */
Route::get('/redirect/{id}', 'GerenciamentoController@index');



/*Rota de tópicos do edital verticalizado*/
Route::get('/topico-disciplina/{id}', 'TopicoController@index');
Route::get('verticalizado/editar-topico/{id}', 'TopicoController@edit');
Route::post('alterar-topico/{id}', 'TopicoController@update');
Route::post('/insert-topico', 'TopicoController@store');
Route::get('verticalizado/delete-topico/{id}', 'TopicoController@destroy');

/*Rota de horas de Estudos*/
Route::get('/horas-estudo', 'HoraEstudoController@index');
Route::post('/cad-horas-estudo', 'HoraEstudoController@store');
Route::get('/edit-horas-estudo/{id}', 'HoraEstudoController@edit');
Route::post('/edit-horas-estudo/{id}', 'HoraEstudoController@update');
Route::get('/delete-horas-estudo/{id}', 'HoraEstudoController@destroy');

/*Rotas de Mestas de Horas de Estudos*/
Route::post('/cad-meta-horas-estudo', 'MetaEstudoController@store');
Route::get('/edit-meta-horas-estudo/{id}', 'MetaEstudoController@edit');
Route::post('/alter-meta-horas-estudo/{id}', 'MetaEstudoController@update');
Route::get('/delete-meta-horas-estudo/{id}', 'MetaEstudoController@destroy');
