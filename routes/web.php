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




////CLIENTES
Route::get('/cliente/index','ClienteController@index');
Route::get('/cliente/create','ClienteController@create');
Route::POST('/cliente/store','ClienteController@NuevoCliente');
Route::get('/cliente/location/{id}','ClienteController@ubicacion');
Route::get('/cliente/show/{id}','ClienteController@show');
////////



/////SERVICIOS
Route::get('/servicio/index','ServicioController@index');
Route::get('/servicio/create','ServicioController@create');
Route::get('/servicio/get','ServicioController@get');
Route::POST('/servicio/store','ServicioController@NuevoServicio');
Route::get('/servicio/delete/{id}','ServicioController@eliminar');
///////



////SOLICITUD
Route::get('/solicitud/index','SolicitudController@index');
Route::get('/solicitud/visualizar/{id}','SolicitudController@show');


////ASIGNACION
Route::post('/asignacion/store','AsignacionController@store');
Route::get('/asignacion/mostrar/{id}','AsignacionController@AsignacionDelTecnico');
Route::get('/asignacion/mostrar/servicios/{id}','AsignacionController@ServiciosAll');
Route::get('/Asignacicion/index','AsignacionController@index');


///Estado

Route::get('/Estado/index','EstadoController@index');
Route::get('/Estado/create','EstadoController@create');
Route::post('/Estado/store','EstadoController@store');

///TECNICO

Route::get('/Tecnico/index','TecnicoController@index');
Route::get('/Tecnico/create','TecnicoController@create');
Route::post('/Tecnico/store','TecnicoController@store');

///HORARIOS

Route::get('/Horario/index','HorarioController@index');
Route::get('/Horario/create','HorarioController@create');
Route::post('/Horario/store','HorarioController@store');


///Prueba

Route::get('/Prueba/index','LoginController@test');


///NOTIFICACIONES

Route::get('/Notificaciones/get','NotificacionController@get');


////REPORTES



