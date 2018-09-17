<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model
{
    protected $fillable = [
    	'nombre', 'id_empleado'
    ];

    public funcion empleado(){
    	return $this->belongsTo("App\Empleado")
    }
}
