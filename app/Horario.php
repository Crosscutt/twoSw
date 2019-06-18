<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horario";
    public $timestamps=false;
    protected $fillable = ['idHorario','HE','HER','HTR','HS'];
    protected $primaryKey = 'idHorario';
}
