<?php


Route::get('/admin', [
    'as' => 'admin',
    'uses' => 'HomeController@index'
]);