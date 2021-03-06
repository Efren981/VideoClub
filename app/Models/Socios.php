<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socios extends Model
{
    use HasFactory;
    protected $fillable=[
        "idPersona",
        "direccion",
        "telefono"
    ];
    // php artisan make:model DetallePrestamo -mcr
}
