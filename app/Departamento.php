<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
     protected $fillable = [
    	'id','nombre', 'descripcion'
    ];

    public function empleado(){
        return $this->hasMany("App\Empleado","id");
    }
}
