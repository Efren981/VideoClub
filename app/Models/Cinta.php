<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinta extends Model
{
    use HasFactory;
    protected $table="cintas";
    protected $primaryKey="id_cinta";
    protected $fillable=['codigo'];
    public $timestamps=false;
}
