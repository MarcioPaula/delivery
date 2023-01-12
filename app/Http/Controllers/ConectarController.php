<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conecta_whats;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

class ConectarController extends Controller
{
    //Função retorna todas as conexões criadas no banco
    public function index(){

        $registros = conecta_whats::all();


        return view("pages.conectar.conectar",compact('registros'));
    }

    //Criação de conexão
    Public function adicionar(Request $request){

        $dados = $request->all();


        $dados =  array(
            'nome' => $request->nome,
            'departamento' => $request->departamento,
            'cod_estabel' => Auth::user()->cod_estabel,
        );

        conecta_whats::create($dados);

        return redirect()->back();
    }

    //Edição dos Fretes
    public function editar(Request $request, $id){

        $conectar = conecta_whats::find($id);

        $dados = $request->all();

        $dados =  array(
            'nome' => $request->nome,
            'departamento' => $request->departamento,
            'cod_estabel' => Auth::user()->cod_estabel,
        );

        $conectar->update($dados);

        return redirect()->back();
    }

    //Deletar Fretes
    public function deletar($id){

        $frete = conecta_whats::find($id);

        $frete->delete();

        return redirect()->back();;
    }

    public function conectarQrcode($id){
        dd($id);
    }

}
