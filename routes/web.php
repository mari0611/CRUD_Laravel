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
    return view('welcome');
});

Route::get('/cadastro', 'Cadastro@index');

Route::get('/editdata/{id}', 'Cadastro@edit');

Route::get('/insertdata', 'Cadastro@display');

Route::post('/add', 'Cadastro@store');

Route::put('/update/{id}', 'Cadastro@updatedata');

Route::get('/delete/{id}', 'Cadastro@deletedata');
