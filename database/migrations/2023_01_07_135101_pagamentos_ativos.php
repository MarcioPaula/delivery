<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PagamentosAtivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Pagamentos ativos
        Schema::create('Pagamentos_ativos', function (Blueprint $table) {
            $table->id();
            $table->string('id_meio_pagamento');
            $table->string('id_empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists('Pagamentos_ativos');
    }
}
