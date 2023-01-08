<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meios_pagamentos;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PagamentosController extends Controller
{
    //Apresenta nome dos pagamentos
    public function index(){

      $registros = DB::table('meios_pagamentos')->get();

      return view("pages.pagamentos.pagamentos", compact('registros'));
    }

    public function adicionar(Request $request){

        $dados = $request->all();

        if($request->status == true){
            $dados =  array(
                'nome' => $request->nome,
                'status' => "Ativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }else {
            $dados =  array(
                'nome' => $request->nome,
                'status' => "Inativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }

        Meios_pagamentos::create($dados);

        return redirect()->back();
    }

    public function editar(Request $request, $id){

        $pagamento = Meios_pagamentos::find($id);

        $dados = $request->all();

        if($request->status == true){
            $dados =  array(
                'nome' => $request->nome,
                'status' => "Ativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }else {
            $dados =  array(
                'nome' => $request->nome,
                'status' => "Inativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }

        $pagamento->update($dados);

        return redirect()->back();
    }

    public function deletar($id){

        $pagamento = Meios_pagamentos::find($id);

        $pagamento->delete();

        return redirect()->back();;
    }
}
