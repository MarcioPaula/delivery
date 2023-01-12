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

        $registros = DB::table('pedidos')->where('cod_estabel', '=', Auth::user()->cod_estabel)
                                         ->where('status', '=', 'Inicial')
                                         ->orWhere('status', '=', 'Preparando')
                                         ->orWhere('status', '=', 'Entrega')->get();

        return view("pages.pedidos.pedidos" ,compact('registros'));
    }

    public function detalhes($id){

        $peditem = DB::table('ped_item')->where('cod_estabel', '=', Auth::user()->cod_estabel)
                                         ->where('id_pedido', '=', $id)->get();

        // foreach($peditem as $item){
        //     $celular = $item->celular;
        // }

        // $clientes = DB::table('clientes')->where('cod_estabel', '=', Auth::user()->cod_estabel)
        //                                  ->where('celular', '=', $celular)->get();

        $pedidos = DB::table('pedidos')->where('cod_estabel', '=', Auth::user()->cod_estabel)
                                       ->where('id', '=', $id)->get();

        // $dados = array(
        //     'id' => strval($pedidos[0]->id),
        //     'valor_total' => $pedidos[0]->valor_total,
        //     'meio_pagamento' => $pedidos[0]->meio_pagamento,
        //     'status' => $pedidos[0]->status,
        //     'nome' => $clientes[0]->nome,
        //     'celular' => $clientes[0]->celular,
        //     'rua' => $clientes[0]->rua,
        //     'numero' => $clientes[0]->numero,
        //     'cidade' => $clientes[0]->cidade,
        // );



        return view("pages.pedidos.detalhesDoPedido", compact("peditem"),compact("pedidos"));
    }

    public function atualizar($id, $status){

        if($status == "Inicial"){
            $result = DB::table( 'pedidos' )
                     ->where('cod_estabel', '=', Auth::user()->cod_estabel)
                     ->where('id', '=', $id)->update(['status' => "Preparando"]);

        }

        if($status == "Preparando"){
            $result = DB::table( 'pedidos' )
                     ->where('cod_estabel', '=', Auth::user()->cod_estabel)
                     ->where('id', '=', $id)->update(['status' => "Entrega"]);
        }

        $registros = DB::table('pedidos')->where('cod_estabel', '=', Auth::user()->cod_estabel)
                    ->where('status', '=', 'Inicial')
                    ->orWhere('status', '=', 'Preparando')
                    ->orWhere('status', '=', 'Entrega')->get();

        return  redirect("pedidos");

    }

    public function cancelar($id){

        $result = DB::table( 'pedidos' )
                    ->where('cod_estabel', '=', Auth::user()->cod_estabel)
                    ->where('id', '=', $id)->update(['status' => "Cancelado"]);

        return  redirect("pedidos");
    }

    public function finalizar($id){

        $result = DB::table( 'pedidos' )
                    ->where('cod_estabel', '=', Auth::user()->cod_estabel)
                    ->where('id', '=', $id)->update(['status' => "Finalizado"]);

        return redirect()->back();
    }
}
