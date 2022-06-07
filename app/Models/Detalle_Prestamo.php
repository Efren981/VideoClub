<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Prestamo extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_socio",
        "id_prestamo",
        "id_cinta"
    ];
    // php artisan make:model DetallePrestamo -mcr
}
