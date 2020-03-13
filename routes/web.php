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

// ' => ' --> atribuir um index ao elemento do array 

Route::get('/', ['uses' => 'Controller@homePage']);
Route::get('/login', ['uses' => 'Controller@login']);
Route::get('/registrar', ['uses' => 'Controller@registrar']);

