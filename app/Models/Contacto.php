<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = ['nombre', 'telefono'];

    // Añade esto para que Laravel encripte los datos automáticamente
    protected $casts = [
        'nombre' => 'encrypted',
        'telefono' => 'encrypted',
    ];
}