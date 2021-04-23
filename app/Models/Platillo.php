<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $filleable = ['nombre', 'precio', 'descripcion', 'imagen1', 'imagen2', 'imagen3', 'especialidad'];
}
