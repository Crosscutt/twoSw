<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    protected $table = "notificacion";
    public $timestamps=false;
    protected $fillable = ['idNotificacion','title','body','idAsignacion'];
    protected $primaryKey = 'idNotificacion';
}
