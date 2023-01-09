<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação Categorias Produtos
        Schema::create('Categorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_categoria');
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
        //Exclusão categoria
        Schema::dropIfExists('Categorias');

    }
}
