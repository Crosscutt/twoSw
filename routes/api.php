<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/solicitud/store','SolicitudController@store');
Route::post('/asignacion/marcar','AsignacionController@Marcar');
Route::post('/asignacion/finalizar','AsignacionController@Finalizar');
Route::post('/Logear/user','LoginController@Logearse');
Route::post('/Cliente/token','NotificacionController@storageCliente');
Route::post('/Tecnico/token','NotificacionController@storageTecnico');
Route::get('/Reportes/uno','ReportesController@pregunta1');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
