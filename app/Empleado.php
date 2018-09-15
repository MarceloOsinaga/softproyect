<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $fillable = [
    	'nombre', 'appaterno','apmaterno','cargo','ci','direccion','estadocivil','fechanac','genero','nacionalidad','telefono','id_sindicato','id_departamento'
    ];
}
