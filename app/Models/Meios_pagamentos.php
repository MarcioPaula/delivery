<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meios_pagamentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'status',
        'cod_estabel'
    ];
}
