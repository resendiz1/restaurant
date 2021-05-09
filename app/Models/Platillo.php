<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Platillo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'descripcion', 'imagen1', 'imagen2', 'imagen3', 'especialidad'];



    public function ingredientes(){
        return $this->hasMany('App\Models\Ingrediente');
    }

    public function extras(){

        return $this->hasMany('App\Models\Extra');
    }


}
