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
})->middleware('auth');

Route::get('/pessoas', 'PessoaController@lista', function () {
})->middleware('auth');

Route::post('/pessoas', 'PessoaController@novo', function() {
})->middleware('auth');

Route::put('/pessoas', 'PessoaController@editar', function() {
})->middleware('auth');

Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
