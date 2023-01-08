<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Categoria;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    //Apresenta Pagina Produtos com os dados em banco
    public function index(){

        $registros = Produtos::all();

        $categorias = Categoria::all();

        return view("pages.produtos.produtos", compact("registros"),compact("categorias"));
    }

    //Cria nova Produtos no banco
    public function adicionar(Request $request){

        $dados = $request->all();

        $dados =  array(
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor_unitario' => $request->valor_unitario,
            'cod_estabel' => Auth::user()->cod_estabel,
            'imagem' => $request->imagem,
            'id_pedido' => 0,
            'id_categoria' => $request->id_categoria,
        );

        Produtos::create($dados);

        return redirect()->back();

    }

    //Editar Produtos no banco
    public function editar(Request $request, $id){

        $produtos = Produtos::find($id);

        $dados = $request->all();

        $dados =  array(
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor_unitario' => $request->valor_unitario,
            'cod_estabel' => Auth::user()->cod_estabel,
            'imagem' => $request->imagem,
            'id_pedido' => 0,
            'id_categoria' => $request->id_categoria,
        );


        $dados =  array(
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'cod_estabel' => Auth::user()->cod_estabel,
        );

        $produtos->update($dados);

        return redirect()->back();

    }

    //Excluir Produtos no banco
    public function deletar($id){

        $produtos = Produtos::find($id);

        $produtos->delete();

        return redirect()->back();;

    }
}
