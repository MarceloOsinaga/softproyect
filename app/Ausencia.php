<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ausencia extends Model
{
     protected $fillable = [
    	'fechadesde', 'fechahasta','descripcion','cantidad','unidadmedida','id_empleado','id_causa'
    ];
}
