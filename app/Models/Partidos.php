<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    use HasFactory;
    protected $fillable = [
        'golesLocales',
        'golesVisitantes',
        'resultado',
        'situacion',
        'fecha',
        'equipoLocal',
        'equipoVisitante',
        'ubicacion',
    ];

    protected $hidden = [
        'id_partidos',
    ];
}
