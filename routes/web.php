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


Route::middleware(['Auth'])->group(function(){
	// tipo contrato
	Route::get('tipocontratos/index')->middleware('permission:tipocontrato.index');//listado
	Route::post('tipocontrato/create')->middleware('permission:tipocontrato.create');//crear
	Route::post('tipocontrato/edit')->middleware('permission:tipocontrato.edit');//editar
	Route::post('tipocontrato/{show}')->middleware('permission:tipocontrato.show');//detalle

	// sindicato causa
	Route::get('sindicato/index')->middleware('permission:sindicato.index');//listado
	Route::post('sindicato/create')->middleware('permission:sindicato.create');//crear
	Route::post('sindicato/edit')->middleware('permission:sindicato.edit');//crear 
	Route::post('sindicato/show')->middleware('permission:sindicato.show');//crear

	// causa
	Route::get('causa/index')->middleware('permission:causa.index');//listado
	Route::post('causa/create')->middleware('permission:causa.create');//crear
	Route::post('causa/edit')->middleware('permission:causa.edit');//crear
	Route::post('causa/show')->middleware('permission:causa.show');//crear
});



Route::resource('empleados','EmpleadoController');
Route::resource('contratos','ContratoController');

