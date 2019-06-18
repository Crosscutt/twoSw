<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notificaciones;
use DB;
class NotificacionController extends Controller
{
    public static function SendNotificacion($UserToken,$titulo,$body,$idA){
       $registrar=new Notificaciones();
       $registrar->title=$titulo;
       $registrar->body=$body;
       $registrar->idAsignacion=$idA; 
       $registrar->save(); 
       $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
      // $token='d9As1OJhwWc:APA91bF5iQWDIpnX7JiuN42Tb1oosdL1Yx629V-hwN3gWSE_hEMZ5pFDujbCoW4EXUEUL_GAZCn_ZvSR5hgy5kte2L253Y6Shba5q5Mlo4ixh2QDrO75okYgamqlloOlJA4066uev171';
       $token=$UserToken;

    $notification = [
        'title'=> $titulo,
        'body' => $body,
        'sound' => true,
    ];
    
    $extraNotificationData = ["message" => $notification,"moredata" =>'dd'];

    $fcmNotification = [
        //'registration_ids' => $tokenList, //multple token array
        'to'        => $token, //single token
        'notification' => $notification,
        'data' => $extraNotificationData
    ];

    $headers = [
        'Authorization: key=AIzaSyA73jhXj84LxI7M57rjIOaDnTmL8YX7clg',
        'Content-Type: application/json'
    ];


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$fcmUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
    $result = curl_exec($ch);
    curl_close($ch);


    }

    function storageCliente(Request $request){
        DB::table('cliente')
        ->where('idCliente','=', $request->id)
        ->update(['token' => $request->token]);

        $resullt=DB::Table('cliente')
        ->join('solicitud','solicitud.idCliente','=','cliente.idCliente')
        ->join('asignacion','asignacion.idSolicitud','=','solicitud.idS')
        ->join('tecnico','tecnico.idTecnico','=','asignacion.idTecnico')
        ->where('cliente.idCliente','=',$request->id)
        ->where('solicitud.idEstado','=',1)
        ->where('asignacion.idEstado','!=',9)
        ->select('tecnico.nombre','tecnico.apellido','tecnico.telefono','asignacion.fecha','asignacion.hora','solicitud.descripcion','cliente.Codigo','tecnico.Ci')
        ->get();
        return $resullt;
    }
    function storageTecnico(Request $request){
        DB::table('tecnico')
        ->where('idTecnico','=', $request->id)
        ->update(['token' => $request->token]);
    }

    function get(){
        return $result=DB::table('notificacion')->get();

    }

}
