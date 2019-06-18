<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ReportesController extends Controller
{
    
    function pregunta1(){
        $start  = new Carbon('2018-10-04 15:00:03');
        $end    = new Carbon('2018-10-05 17:00:09');
       // dd($start->diff($end)->format('%H:%I:%S'));
       // dd($start->diffInHours($end) . ':' . $start->diff($end)->format('%I:%S'))   ;

       
       $collection = collect([['id' => 'prod-100', 'name' => 'Desk'],['id' => 'prod-200', 'name' => 'Chair']]);
       $keyed = $collection->keyBy('id');

      // dd($keyed);
       
        return view('prueba',compact('keyed'));
       
        $testdate = $start->diffInDays($end);
        //dd($testdate);
    }

}
