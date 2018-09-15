<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memorandum extends Model
{
   protected $fillable = [
    	'motivo', 'fecha','id_empleado'
    ];
}
