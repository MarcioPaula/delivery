<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function listar_produtos()
   {
     return Produtos::all();

   }
}
