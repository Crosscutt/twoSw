<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicio";
    public $timestamps=false;
    protected $fillable = ['idServicio','nombre','descripcion'];
    protected $primaryKey = 'idServicio';
}
