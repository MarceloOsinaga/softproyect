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

Auth::routes();
///Backup
Route::resource('/backup', 'Admin\BackupController');
Route::resource('sindicatos','SindicatoController');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('tipocontratos', 'TipocontratoController');
Route::resource('sindicatos','SindicatoController');
Route::resource('causas','CausaController');
Route::resource('departamentos','DepartamentoController');
Route::resource('empleados','EmpleadoController');
Route::resource('empleados','Empleado');

