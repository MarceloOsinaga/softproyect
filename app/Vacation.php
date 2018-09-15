<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $fillable = [
    	'fechasolicitud', 'fechasalida','fechaincorporacion','motivo','id_empleado'
    ];
}
