<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    use HasFactory;
    protected $fillable=["id_detalle__prestamos",
        "fecha_devolucion",
        "observaciones"];
}
