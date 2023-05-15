<?php

namespace App\Models;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_partido',
        'fecha',
        'seccion',
        'fila_y_numero',
        'precio',
    ];

    protected $hidden = [
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'entradas_user_partidos', 'id_entradas', 'id_user');

    }

    public function partidos(){
        return $this->belongsToMany(Partidos::class, 'entradas_user_partidos', 'id_entradas', 'id_partido');

    }

    public function hasUser($role)
    {
        return $this->role === $role;
    }

    public function hasPartido($role)
    {
        return $this->role === $role;
    }

}
