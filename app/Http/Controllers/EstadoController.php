<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Estado;
class EstadoController extends Controller
{
    function index(){
      $estados=DB::Table('estado')->get();
      return view('Estado.index',compact('estados'));
    }

    function create(){
       return view('Estado.create'); 
    }

    function store(Request $request){
      $Estado=new Estado();
      $Estado->nombre=$request->input('nombre');
      $Estado->color=$request->input('color');
      $Estado->save();
      return redirect()->back();
    }
}
