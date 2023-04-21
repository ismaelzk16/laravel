<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_partido',
        'fecha',
        'seccion',
        'fila_y_numero',
        'precio',
    ];

    protected $hidden = [
        'id_user',
    ];
}
