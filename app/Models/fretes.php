<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fretes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'status',
        'cod_estabel',
    ];
}
