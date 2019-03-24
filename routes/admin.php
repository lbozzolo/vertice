<?php

Auth::routes();

Route::post('medicos/login', [
    'as' => 'medicos.login',
    'uses' => 'Auth\LoginController@loginMedicos'
]);


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [
        'as' => 'admin',
        'uses' => 'HomeController@index'
    ]);

    // Generator builder

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

    // Sidebar Web

    Route::resource('estatutos', 'EstatutoController');

    Route::resource('comisiones', 'ComisionController');

    Route::resource('users', 'UserController');

    Route::resource('servicios', 'ServicioController');

    Route::resource('noticias', 'NoticiaController');

    Route::resource('images', 'ImageController');

    Route::resource('categorias', 'CategoriaController');

    Route::resource('sliders', 'SliderController');

    // Sidebar Sistema

    Route::resource('medicos', 'MedicoController');

    Route::resource('liquidaciones', 'LiquidacionController');

    Route::post('liquidaciones/consultar', [
        'as' => 'liquidaciones.consultar',
        'uses' => 'LiquidacionController@consultar'
    ]);

    Route::get('liquidaciones/{id}/iibb', [
        'as' => 'liquidaciones.iibb',
        'uses' => 'LiquidacionController@consultarIIBB'
    ]);

    Route::get('liquidaciones/{id}/detalles', [
        'as' => 'liquidaciones.detalles',
        'uses' => 'LiquidacionController@consultarDetalles'
    ]);

    Route::get('resumenes-mensuales', [
        'as' => 'liquidaciones.resumenes.mensuales',
        'uses' => 'LiquidacionController@resumenesMensuales'
    ]);

    Route::post('liquidaciones/mensuales', [
        'as' => 'liquidaciones.consultar.resumenes.mensuales',
        'uses' => 'LiquidacionController@consultarResumenesMensuales'
    ]);



    // Imágenes

    Route::get('imagenes/{file}', [
        'as' => 'imagenes.ver',
        'uses' => 'ImageController@verImage'
    ]);

    Route::post('imagenes/{id}/{class}', [
        'as' => 'images.save',
        'uses' => 'ImageController@storeImage'
    ]);

    Route::post('imagenes/store', [
        'as' => 'images.store',
        'uses' => 'ImageController@store'
    ]);

    Route::post('/{id}/{class}/demos/jquery-image-upload', [
        'as' => 'subir.imagen',
        'uses' => 'ImageController@saveJqueryImageUpload'
    ]);

    Route::get('imagenes/{id}/{class}/{imagen}/principal', [
        'as' => 'images.main',
        'uses' => 'ImageController@principalImage',
    ]);

    Route::get('sliders/{id}/activate', [
        'as' => 'sliders.activate',
        'uses' => 'SliderController@activate'
    ]);

});

