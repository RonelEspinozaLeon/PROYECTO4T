<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctores'; 

    protected $fillable = [
        'user_id', 'nombre', 'apellido', 'ubicacion',
        'biografia', 'especialidad_id', 'horario_id',
    ];

}
