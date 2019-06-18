<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Solicitud;
class SolicitudController extends Controller
{
    function index(){
        $solicitudes=DB::Table('solicitud')
        ->join('cliente','cliente.idCliente','=','solicitud.idCliente')
        ->join('estado','estado.idEstado','=','solicitud.idEstado')
        ->select('solicitud.idS as idS','cliente.nombre as Nombre','cliente.apellido as Apellido','solicitud.descripcion as Descripcion','estado.color as Color','estado.Nombre as NombreColor','solicitud.Fecha_hora as datatime')
        ->get();
        return view('Solicitud.index',compact('solicitudes'));
    }

    function store(Request $request){
        $hoy = date("Y-m-d H:i:s");
        $solicitud=new Solicitud();
        $solicitud->descripcion=$request->input('Descripcion');
        $solicitud->idCliente=$request->idCliente;
        $solicitud->Fecha_hora=$hoy;
        $solicitud->idEstado=2;
        $solicitud->save();
        
        $solicitud->detalle()->sync($request->get('Servicios'));
        return 1;
    }

    function show($id){

       $Datos=DB::Table('solicitud')
       ->join('cliente','cliente.idCliente','=','solicitud.idCliente')
       ->join('estado','estado.idEstado','=','solicitud.idEstado')
       ->where('solicitud.idS','=',$id)
       ->select('cliente.*','estado.*','solicitud.*')
       ->get();
       
       $Servicios=DB::Table('detalle')
       ->join('solicitud','solicitud.idS','=','detalle.idSolicitud')
       ->join('servicio','servicio.idServicio','=','detalle.idServicio')
       ->where('detalle.idSolicitud','=',$id)
       ->select('servicio.nombre')
       ->get();
       
       $Tecnicos=DB::Table('tecnico')
       ->join('estado','estado.idEstado','=','tecnico.idEstado')
       ->where('estado.Nombre','=',"Libre")
       ->select('tecnico.*')
       ->get();
       return view('Solicitud.show',compact('Datos','Servicios','Tecnicos','id')); 
    }



}
