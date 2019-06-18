<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Cliente extends Model
{
    protected $table = "cliente";
    public $timestamps=false;
    protected $fillable = ['idCliente','ci','nombre','apellido','direccion','sexo','telefono','Nro_Casa','idUbicacion'];
    protected $primaryKey = 'idCliente';

}
