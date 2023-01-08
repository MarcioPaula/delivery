<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'valor_unitario',
        'cod_estabel',
        'imagem',
        'id_pedido',
        'id_categoria',
    ];
}
