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

Route::get('/', 'HomeController@index', function () {
})->middleware('auth', 'cors');

Route::get('/pessoas', 'PessoaController@lista', function() {
})->middleware('cors');

Route::post('/pessoas/novo', 'PessoaController@novo', function() {
})->middleware('auth', 'cors');

Route::put('/pessoas/editar', 'PessoaController@editar', function() {
})->middleware('auth','cors');

Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home', function () {
})->middleware('cors');
