<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si usas el nombre plural por convención)
    protected $table = 'multas';

    // Campos que se pueden asignar masivamente (para inserciones o updates)
    protected $fillable = [
        'descripcion',
        'departamento_id',
    ];
}
