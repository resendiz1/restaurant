<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes_pedido', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('extra')->nullable();
            $table->string('normal')->nullable();
            $table->unsignedInteger('ingredientes_pedido.pedido_id');
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
        Schema::dropIfExists('_ingredientes_pedido');
    }
}
