<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;
class LoginController extends Controller
{
    function Logearse(Request $request){

        $cliete=DB::Table('cliente')
        ->join('ubicacion','ubicacion.id','=','cliente.idUbicacion')
        ->where('cliente.Username','=',$request->username)
        ->where('cliente.Password','=',$request->password)
        ->select('cliente.idCliente','cliente.nombre','cliente.apellido','cliente.direccion','cliente.Username','cliente.Nro_Casa','ubicacion.lat','ubicacion.log','cliente.telefono')
        ->get()->toArray();
         if(count($cliete,1)==1){
             return $cliete;
         }else{
            $tenico=DB::Table('tecnico')
            ->where('tecnico.Username','=',$request->username)
            ->where('tecnico.Password','=',$request->password)
            ->get()->toArray();
             if(count($tenico,1)==1){
                 return $tenico;
             }else{
                 return 0;
             }
         }

    
    }

    public function test(){
     NotificacionController::SendNotificacion(1,'Solicitud Aprobada','Marlene');
    }	
}
