<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;
use App\Models\ped_item;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{
    //Apresenta tela principal pedidos novos
    public function index(){

        $registros = DB::table('pedidos')->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        return view("pages.pedidos.pedidos" ,compact('registros'));
    }

    public function detalhes($id){

        $registros = ped_item::all($id);

        dd($registros);

        // $pedidos = DB::table('pedidos')->where('cod_estabel', '=', Auth::user()->cod_estabel)
        //                                  ->where('id', '=', $id)->get();

        // $pedItem = DB::table('ped_item')->where('id_pedido', '=', $id)
        //                                 ->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();


        // foreach ($pedItem as $item) {
        //     dd($teste + 1);
        // }

        // $produtos = DB::table('produtos')->where('id', '=', $pedItem->id_produtos)
        //                                  ->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        // $clientes = DB::table('clientes')->where('id', '=', $pedidos->nome_cliente)
        //                                  ->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        // foreach ($pedItem as $itens){
        //     $item =  array(
        //         'imagem' => $produtos->imagem,
        //         'nome' => $produtos->nome,
        //         'quantidade' => "10",
        //         'pedido' => $id,
        //         'meio_pagamento' => $pedido->meio_pagamento,
        //         'valor_total' => $pedidos->valor_total,
        //         'nome_cliente' => $clientes->nome,
        //         'status' => $pedidos->status,
        //         'celular' => $clientes->celular,
        //     );
        // }

        // dd($item);



        return view("pages.pedidos.detalhesDoPedido", compact("registros"));
    }
}
