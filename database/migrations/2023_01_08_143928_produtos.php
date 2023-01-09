<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação Produtos
        Schema::create('Produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('descricao');
            $table->string('valor_unitario');
            $table->string('cod_estabel');
            $table->string('imagem')->nullable();
            $table->string('id_categoria');
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
        //Exclusão Produtos
        Schema::dropIfExists('Produtos');
    }
}
