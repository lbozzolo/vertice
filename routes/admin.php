<?php

Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [
        'as' => 'admin',
        'uses' => 'HomeController@index'
    ]);

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');


    Route::resource('estatutos', 'EstatutoController');

    Route::resource('users', 'UserController');

    Route::resource('servicios', 'ServicioController');

    Route::resource('noticias', 'NoticiaController');

    Route::resource('images', 'ImageController');


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

    Route::resource('categorias', 'CategoriaController');

    Route::resource('sliders', 'SliderController');

    Route::get('sliders/{id}/activate', [
        'as' => 'sliders.activate',
        'uses' => 'SliderController@activate'
    ]);

});

