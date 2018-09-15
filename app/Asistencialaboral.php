<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencialaboral extends Model
{
    protected $fillable = [
    	'horaingreso', 'horasalida','fecha','id_empleado'
    ];
}
