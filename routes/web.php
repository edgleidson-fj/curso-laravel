<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal');

Route::get('/sobrenos', 'SobrenosController@sobrenos');

Route::get('/contato', 'ContatoController@contato');

//Obs: ? -> para tornar o campo opcional
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = 'Mensagem não informada'){
    echo'teste '.$nome.' - '.$categoria.' - '.$assunto.' - '.$mensagem;
});