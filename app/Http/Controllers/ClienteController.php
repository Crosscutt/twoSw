<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Ubicacion;
use DB;
class ClienteController extends Controller
{
    

    function index(){
      $cliente=DB::Table('cliente')
      ->join('ubicacion','ubicacion.id','=','cliente.idUbicacion')
      ->select('cliente.*','ubicacion.*')
      ->get();
        dd($cliente);
     return view('Cliente.index',compact('cliente')); 
    }
    function show($id){
     $cliente=DB::Table('cliente')
     ->where('cliente.idCliente','=',$id)
     ->get();
     
     return view('Cliente.show',compact('cliente'));
    }

    function ubicacion($id){
        $ubicacion=DB::Table('ubicacion')
        ->where('id','=',$id)
        ->select('lat','log')
        ->get();

        return view('Cliente.ubicacion',compact('ubicacion'));
    }
     
    function create(){
        return view('Cliente.create');        
    }


    function NuevoCliente(Request $request){
      
     $Ubicacion=new Ubicacion();
     $Ubicacion->lat=$request->input('lat');
     $Ubicacion->log=$request->input('lng');
     $Ubicacion->save();   
     $cliente=new Cliente();
     $cliente->nombre=$request->input('Nombre');
     $cliente->apellido=$request->input('apellido');
     $cliente->ci=$request->input('Cedula');
     $cliente->direccion=$request->input('Direccion');
     $cliente->sexo=$request->input('sexo');
     $cliente->telefono=$request->input('telefono');
     $cliente->Nro_Casa=$request->input('#casa');
     $cliente->idUbicacion=$Ubicacion->id;
     $cliente->save();
    }
}
