<?php

Route::get('/', 'Controlador_prueba@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
