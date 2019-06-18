<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use DB;
class ServicioController extends Controller
{
    function index(){
        $servicios=DB::Table('servicio')->get();
        return view('Servicio.index',compact('servicios'));        
       }
        
       function create(){
           return view('Servicio.create');        
       }

       function eliminar($id){

        $servicio = Servicio::find($id);
        $servicio->delete();
        return redirect()->back();
       }
   
   
       function NuevoServicio(Request $request){
         $servicio=new Servicio();
         $servicio->nombre=$request->input('nombre');
         $servicio->descripcion=$request->input('descripcion');
         $servicio->save();
       
       }

       function get(){
         $servicio=DB::Table('servicio')->select('servicio.nombre','servicio.idServicio')->get();
         return $servicio;
       }
}
