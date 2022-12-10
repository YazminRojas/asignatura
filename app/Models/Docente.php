<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeroIdentificacion',
        'nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'ciudad',
        'direccion',
        'telefono',
        'fechaNacimiento',
        'sexo'
    ];
}
