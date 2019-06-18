<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table = "tecnico";
    public $timestamps=false;
    protected $fillable = ['idTecnico','Ci','nombre','apellido','direccion','sexo','telefono','idHorario','idEstado','Username','Password'];
    protected $primaryKey = 'idTecnico';
}
