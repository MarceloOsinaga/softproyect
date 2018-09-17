<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $fillable = [
        'nombre', 'appaterno',
        'apmaterno','cargo','ci',
        'direccion','estadocivil',
        'fechanac','genero',
        'nacionalidad','telefono',
        'id_sindicato','id_departamento'
    ];

    public function sindicato(){
        return $this->belongsTo("App\Sindicato","id_sindicato");
    }

    public function departamento(){
        return $this->belongsTo("App\Departamento","id_departamento");
    }
}
