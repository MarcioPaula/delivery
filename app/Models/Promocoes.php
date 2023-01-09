<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'status',
        'cod_estabel'
    ];
}
