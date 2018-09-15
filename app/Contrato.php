<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
     protected $fillable = [
    	'horaingreso', 'horasalida','fechainicio','fechafin','salario','turnotrabajo','id_tipocontrato','id_empleado'
    ];
}
