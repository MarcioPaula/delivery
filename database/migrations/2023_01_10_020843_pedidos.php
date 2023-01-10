<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação tabela Pedido
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('satisfação')->nullable();
            $table->string('valor_total');
            $table->string('meio_pagamento');
            $table->string('nome_cliente');
            $table->string('status')->nullable(); //1-INICIAL  2-PREPARANDO 3-ENTREGA 4-FINALIZADO 5-CANCELADO
            $table->string('cod_estabel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Exclusão tabela Pedido
        Schema::dropIfExists('pedidos');
    }
}
