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
  return redirect('home');
});


Route::group(['prefix' => 'admin'], function(){

    Route::get('/', [
        'as' => 'admin',
        'uses' => 'HomeController@index'
    ]);

});


Auth::routes();

Route::get('/home', 'WebController@index');


/*Route::get('/panel', 'HomeController@index');*/



Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');


Route::resource('empresas', 'EmpresaController');
/*Route::post('empresas/{id}/imagenes', [
    'as' => 'empresas.images',
    'uses' => 'EmpresaController@storeImage'
]);
Route::get('imagenes/principal/{id}', [
    'as' => 'empresas.image.main',
    'uses' => 'EmpresaController@principalImage',
]);*/

Route::resource('users', 'UserController');

Route::resource('servicios', 'ServicioController');

Route::resource('proyectos', 'ProyectoController');

Route::resource('eventos', 'EventoController');

Route::resource('insumos', 'InsumoController');

Route::resource('colors', 'ColorController');

Route::resource('images', 'ImageController');

Route::get('imagenes/{file}', [
    'as' => 'imagenes.ver',
    'uses' => 'ImageController@verImage'
]);

Route::post('imagenes/{id}/{class}', [
    'as' => 'images.save',
    'uses' => 'ImageController@storeImage'
]);
Route::get('imagenes/{id}/{class}/{imagen}/principal', [
    'as' => 'images.main',
    'uses' => 'ImageController@principalImage',
]);

Route::resource('categorias', 'CategoriaController');

Route::resource('categoriables', 'CategoriableController');

Route::resource('sliders', 'SliderController');
