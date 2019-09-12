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
    return 'welcome';
});

Route::get('/pessoas', 'PessoaController@lista');

Route::post('/pessoas', 'PessoaController@novo');

Route::put('/pessoas', 'PessoaController@editar');
