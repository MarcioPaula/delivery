<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fretes;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

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

        Fretes::create($dados);

        return redirect()->back();
    }

    //Edição dos Fretes
    public function editar(Request $request, $id){

        $frete = Fretes::find($id);

        $dados = $request->all();

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
