<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cria Empresas
        Schema::create('Estabelecimento', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf_cnpj')->nullable();
            $table->string('ie')->nullable();
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('telefone');
            $table->string('email');
            $table->string('imagem');
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
        Schema::dropIfExists('Estabelecimento');
    }
}
