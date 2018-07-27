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

//Route::get('/home', 'HomeController@index')->name('home');

//RUTAS CRUD USUARIO
Route::get('/crudUser','CrudUserController@indexCrudUsers');//VISTA
Route::get('listarUserR','CrudUserController@listUser')->name('listarUser');//lISTAR USUARIOS A LA VISTA
Route::post('createUser','CrudUserController@createUser')->name('createUser');//REGISTRAR
Route::post('eliminar/{id?}','CrudUserController@elimarUsuario')->name('elimarUsuario');//ELIMINAR
Route::put('modificar','CrudUserController@modificarUsuario')->name('modificarUsuario');//MODIFICAR
