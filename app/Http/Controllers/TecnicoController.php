<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tecnico;
use  DB;
class TecnicoController extends Controller
{
    function index(){
        $tecnicos=DB::Table('tecnico')
        ->join('estado','estado.idEstado','=','tecnico.idEstado')
        ->select('tecnico.*','estado.nombre as nameColor','estado.color')
        ->get();
        
        return view('Tecnico.index',compact('tecnicos'));
    }

    function create(){

        $horarios=DB::Table('horario')->get();
        return view('Tecnico.create',compact('horarios'));
    }

    function store(Request $request){
        $tecnico=new Tecnico();
        $tecnico->Ci=$request->input('ci');
        $tecnico->nombre=$request->input('nombre');
        $tecnico->apellido=$request->input('apellido');
        $tecnico->direccion=$request->input('direccion');
        $tecnico->sexo=$request->input('sexo');
        $tecnico->telefono=$request->input('telefono');
        $tecnico->idHorario=$request->input('horario');
        $tecnico->idEstado=4;
        $tecnico->save();

       return redirect()->back();
    }
    
}
