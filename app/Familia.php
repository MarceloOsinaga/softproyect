<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
   protected $fillable = [
    	'nombre', 'parentesco','ci','id_empleado'
    ];
}
