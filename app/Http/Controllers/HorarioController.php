<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Horario;
class HorarioController extends Controller
{
    function index(){
        $horarios=DB::Table('horario')->get();
        return view('Horario.index',compact('horarios'));
    }
    function create(){
        return view('Horario.create');
    }

    function store(Request $request){
        $horario=new Horario();
        $horario->HE=$request->input('HE');
        $horario->HER=$request->input('HER');
        $horario->HTR=$request->input('HFR');
        $horario->Hs=$request->input('HS');
        $horario->save();

        return redirect()->back();
    }
}
