<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PedidoPreparado extends Model
{
    use HasFactory;

    protected $table = 'pedido_preparado';
    protected $fillable = ['cliente', 'direccion', 'telefono', 'imagen', 'nombre_platillo'];


    public function ingredientes_pedido(){
        return $this->hasMany('App\Models\Pedido');
    }
}
