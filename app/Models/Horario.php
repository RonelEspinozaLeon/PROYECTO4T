<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Horario extends Model
{
    protected $table = 'horarios';

    protected $fillable = ['diasemana', 'horarioInicio', 'horarioFin'];
}
