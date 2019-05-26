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


//Route::group(['prefix' => 'web'], function () {

    Route::get('/', [
        'as' => 'home',
        'uses' => 'WebController@index'
    ]);

    Route::get('/home', 'WebController@index');

    Route::get('/contacto', [
        'as' => 'contacto',
        'uses' => 'WebController@contacto'
    ]);


//});




