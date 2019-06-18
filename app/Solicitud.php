<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    
    protected $table = "solicitud";
    public $timestamps=false;
    protected $fillable = ['idS','descripcion','idCliente','Fecha_hora','idEstado'];
    protected $primaryKey = 'idS';

    public function detalle(){
        return $this->belongsToMany(Solicitud::class,'detalle','idSolicitud','idServicio');
       }
}
