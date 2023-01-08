<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fretes;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

class FretesController extends Controller
{
    //Função inicial que busca todos os fretes cadastrados
    public function index (){

        $registros = Fretes::all();

        return view("pages.fretes.fretes",compact('registros'));

    }

    //Criação de Fretes
    Public function adicionar(Request $request){

        $dados = $request->all();

        $dados =  array(
            'nome' => $request->nome,
            'valor' => $request->valor,
            'cod_estabel' => Auth::user()->cod_estabel,
        );

        Fretes::create($dados);

        return redirect()->back();
    }

    //Edição dos Fretes
    public function editar(Request $request, $id){

        $frete = Fretes::find($id);

        $dados = $request->all();

        $dados =  array(
            'nome' => $request->nome,
            'valor' => $request->valor,
            'cod_estabel' => Auth::user()->cod_estabel,
        );

        $frete->update($dados);
        return redirect()->back();
    }

    //Deletar Fretes
    public function deletar($id){

        $frete = Fretes::find($id);

        $frete->delete();

        return redirect()->back();;
    }
}
