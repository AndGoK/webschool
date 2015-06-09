<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	Route::resource('users', 'UsersController',['except' => ['create']]);
	Route::get('users/create/{type}', 'UsersController@create');
	Route::resource('asignatura', 'AsignaturasController');
	Route::resource('alumno', 'AlumnosController');
	Route::resource('docente', 'DocentesController');
	Route::resource('curso', 'CursosController');
});

Route::group(['prefix' => 'docente', 'namespace' => 'Docente'], function(){
	Route::resource('notas', 'NotasController');
	Route::resource('asistencias', 'AsistenciasController');
});
