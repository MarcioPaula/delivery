<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Promocoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cria tabela Promocoes
        Schema::create('Promocoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('cod_estabel');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Deleta tabela Promocoes
        Schema::dropIfExists('Promocoes');
    }
}
