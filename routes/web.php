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

require(__DIR__ . '/admin.php');

Route::get('/', function () {
  return redirect('home');
});

Route::get('home', function () {
    return redirect('web');
});


Route::group(['prefix' => 'web'], function () {

    Route::get('/', [
        'as' => 'home',
        'uses' => 'WebController@index'
    ]);

    Route::get('estatuto', [
        'as' => 'web.estatuto',
        'uses' => 'WebController@estatuto'
    ]);

    Route::get('comision', [
        'as' => 'web.comision',
        'uses' => 'WebController@comision'
    ]);

    Route::get('servicios', [
        'as' => 'web.servicios',
        'uses' => 'WebController@servicios'
    ]);

    Route::get('medicos', [
        'as' => 'web.medicos',
        'uses' => 'WebController@medicos'
    ]);

    Route::get('noticias/{categoriaId?}', [
        'as' => 'web.noticias',
        'uses' => 'WebController@noticias'
    ]);

    Route::get('noticias/{id}/ver', [
        'as' => 'web.noticias.ver',
        'uses' => 'WebController@verNoticia'
    ]);

    Route::get('contacto', [
        'as' => 'web.contacto',
        'uses' => 'WebController@contacto'
    ]);

    Route::post('contacto', [
        'as' => 'web.post.contacto',
        'uses' => 'WebController@postContacto'
    ]);

    Route::get('/home', 'WebController@index');

});




