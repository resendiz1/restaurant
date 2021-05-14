<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoPreparadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_preparado', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('imagen');
            $table->string('nombre_platillo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pedido_preparado');
    }
}
