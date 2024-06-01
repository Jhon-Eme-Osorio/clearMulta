<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'tipo_documento',
        'numero_identidad',
        'email',
        'telefono',
        'fecha_nacimiento',
        'direccion',
        'tipo_vehiculo',
        'matricula',
        'metodo_pago'
    ];
}
