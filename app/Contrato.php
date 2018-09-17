<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

     protected $fillable = [
    	'horaingreso', 'horasalida','fechainicio','fechafin','salario','turnotrabajo','id_tipocontrato','id_empleado'
    ];
   
    public function tipocontrato(){
    	return $this->belongsTo('App\Tipocontrato','id_tipocontrato');
    }
  public function empleado(){
    	return $this->belongsTo('App\Empleado','id_empleado');
    }
}