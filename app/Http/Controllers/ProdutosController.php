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

        $registros = DB::table('produtos')->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        $categorias = DB::table('categorias')->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        return view("pages.produtos.produtos", compact("registros"),compact("categorias"));
    }

    //Cria nova Produtos no banco
    public function adicionar(Request $request){

        $dados = $request->all();

        if($request->status == true){
            $dados =  array(
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'valor_unitario' => $request->valor_unitario,
                'status' => "Ativo",
                'cod_estabel' => Auth::user()->cod_estabel,
                'id_categoria' => $request->id_categoria,
            );
        }else {
            $dados =  array(
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'valor_unitario' => $request->valor_unitario,
                'status' => "Inativo",
                'cod_estabel' => Auth::user()->cod_estabel,
                'id_categoria' => $request->id_categoria,
            );
        }

        if ($request->hasFile('imagem'))
        {
            $arquivo = $request->file('imagem');
            $num = $dados['nome'];
            $dir = "img/products";
            $ext = $arquivo->guessClientExtension();
            $nomearquivo = "item_" . $num . "." . $ext;
            $arquivo->move($dir, $nomearquivo);
            $dados['imagem'] = $dir . "/" . $nomearquivo;

        }

        Produtos::create($dados);

        return redirect()->back();

    }

    //Editar Produtos no banco
    public function editar(Request $request, $id){

        $produtos = Produtos::find($id);

        $dados = $request->all();

        if($request->status == true){
            $dados =  array(
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'valor_unitario' => $request->valor_unitario,
                'status' => "Ativo",
                'cod_estabel' => Auth::user()->cod_estabel,
                'id_categoria' => $request->id_categoria,
            );
        }else {
            $dados =  array(
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'valor_unitario' => $request->valor_unitario,
                'status' => "Inativo",
                'cod_estabel' => Auth::user()->cod_estabel,
                'id_categoria' => $request->id_categoria,
            );
        }

        if ($request->hasFile('imagem'))
        {
            $arquivo = $request->file('imagem');
            $num = $dados['nome'];
            $dir = "img/products";
            $ext = $arquivo->guessClientExtension();
            $nomearquivo = "item_" . $num . "." . $ext;
            $arquivo->move($dir, $nomearquivo);
            $dados['imagem'] = $dir . "/" . $nomearquivo;

        }

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
