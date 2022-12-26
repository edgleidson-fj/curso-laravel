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

//Rota com expressão regular 
// [0-9] -> Só vai aceitar valores numéricos
// [A-za-z] -> Só vai aceitar letras maiusculas e/ou minusculas
// []+ -> Significa que tem que ter pelo menos 1 caracter
Route::get('/contato/{nome}/{categoria_id}',
function(
    string $nome = 'Desconhecido', 
    int $categoria_id = 1 // 1 - 'Informação'
    ){
    echo'teste '.$nome.' - '.$categoria_id;
})->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');