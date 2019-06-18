<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = "asignacion";
    public $timestamps=false;
    protected $fillable = ['idAsignacion','idTecnico','hora','fecha','idEstado','idSolicitud','token','HM','HF'];
    protected $primaryKey = 'idAsignacion';
    
}
