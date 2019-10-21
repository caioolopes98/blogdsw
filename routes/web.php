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
    return view('login');
});


Route::get('/inicio/{id}', [
    'uses' => 'PostController@inicio',
    'as' => 'inicio'
]);

Route::get('/usuario/create', [
    'uses' => 'UsuarioController@create',
    'as' => 'novoUsuario.create'
]);

Route::get('/cadastro', [
    'uses' => 'UsuarioController@cadastro',
    'as' => 'cadastro'
]);

Route::get('/comentar/{id_post}/{id_usuario}', [
    'uses' => 'PostController@comentar',
    'as' => 'comentar'
]);

Route::get('/comentarios/{id_post}/{id_usuario}', [
    'uses' => 'PostController@comentarios',
    'as' => 'comentarios'
]);


Route::get('/validar', [
    'uses' => 'LoginController@validar',
    'as' => 'validar'
]);

Route::get('/novoPost/{id}', [
    'uses' => 'PostController@index',
    'as' => 'novoPost'
]);

Route::get('/novoPost/create/{id}', [
    'uses' => 'PostController@create',
    'as' => 'novoPost.create'
]);
