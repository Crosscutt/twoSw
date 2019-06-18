<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use DB;
class AsignacionController extends Controller
{
    function store(Request $request){
       $asignacion=new Asignacion();
       $asignacion->idTecnico=$request->input('idTecnico');
       $asignacion->fecha=$request->input('fecha');
       $asignacion->hora=$request->input('hora');
       $asignacion->idEstado=6;   /// 6 estado revisado
       $asignacion->idSolicitud=$request->input('idSolicitud');
       $asignacion->save();
       
       $TokenTecnico=DB::table('tecnico')
       ->where('idTecnico','=',$request->idTecnico)
       ->select('token')
       ->get();

       $TokenCliente=DB::Table('solicitud')
       ->join('cliente','cliente.idCliente','=','solicitud.idCliente')
       ->where('solicitud.idS','=',$request->idSolicitud)
       ->select('token')
       ->get();

       NotificacionController::SendNotificacion($TokenTecnico[0]->token,"Nuevo trabajo",'Tienes un nuevo trabajo en proceso a horas'.$request->hora,$asignacion->idAsignacion);
       NotificacionController::SendNotificacion($TokenCliente[0]->token,"Solicitud Aprobada",'Revise los detalles en la app'.$request->hora,$asignacion->idAsignacion);
       

       DB::table('solicitud')
       ->where('solicitud.idS',$request->input('idSolicitud'))
       ->update(['idEstado' => 1]);

    }

    function AsignacionDelTecnico($id){
      $DatosCliente=DB::Table('asignacion')
      ->join('solicitud','solicitud.idS','=','asignacion.idSolicitud')
      ->join('cliente','cliente.idCliente','=','solicitud.idCliente')
      ->join('ubicacion','ubicacion.id','=','cliente.idUbicacion')
      ->where('asignacion.idTecnico','=',$id)
      ->where('asignacion.idEstado','=',6)
      ->select('cliente.nombre','cliente.apellido','cliente.Nro_Casa','cliente.telefono','cliente.idCliente',
      'cliente.direccion','ubicacion.lat as latitude','ubicacion.log as lng','asignacion.idAsignacion as idS')
      ->get();
      return $DatosCliente;
    }

    function ServiciosAll($id){
      $NombreS=DB::Table('detalle')
      ->join('solicitud','solicitud.idS','=','detalle.idSolicitud')
      ->join('servicio','servicio.idServicio','=','detalle.idServicio')
      ->where('detalle.idSolicitud','=',$id)
      ->select('servicio.nombre')
      ->get();
      return $NombreS;
    }

    function Marcar(Request $request){
      $var= date('h:i:s');
      DB::table('asignacion')
      ->where('idAsignacion', $request->id)
      ->update(['HM' => $var,'idEstado'=>8]);
    }

     function Finalizar(Request $request){
      $var= date('h:i:s');

      $token=DB::Table('cliente')
      ->where('cliente.idCliente','=',$request->idC)
      ->select('cliente.Codigo')
      ->get();
      
      if($request->texto==$token[0]->Codigo){
        DB::table('asignacion')
        ->where('idAsignacion', $request->id)
        ->update(['HF' => $var,'idEstado'=>9]);
      }

     }

     function index(){
       $Asignations=DB::Table('asignacion')
       ->join('tecnico','tecnico.idTecnico','=','asignacion.idTecnico')
       ->join('estado','estado.idEstado','=','asignacion.idEstado')
       ->select('tecnico.nombre','tecnico.apellido','asignacion.*','estado.*')
       ->get();

       return view('Asignacion.index',compact('Asignations'));
     }





}
