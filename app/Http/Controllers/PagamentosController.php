<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagamentosController extends Controller
{
    //Apresenta nome dos pagamentos
    public function index(){

      $pagamentos = DB::table('meios_pagamentos')->get();

      return view("pages.pagamentos.pagamentos", compact('pagamentos'));
    }
}
