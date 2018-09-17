<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
     protected $fillable = [
    	'horaingreso', 'horasalida','fechainicio','fechafin','salario','turnotrabajo','id_tipocontrato','id_empleado'
    ];

    function tipoContrato(){
    	return $this->belongsTo("App\TipoContrato","id_tipocontrato");
    }
    function empleado(){
    	retun $this->hasOne("App\Empleado","id_empleado");
    }
}
