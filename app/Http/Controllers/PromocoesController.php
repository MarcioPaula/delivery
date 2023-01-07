<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocoes;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class PromocoesController extends Controller
{
    //Apresenta Pagina Promoções com os dados em banco
    public function index(){

        return view("pages.promocoes.promocoes");
    }

    //Cria nova promoção no banco
    public function adicionar(Request $request){

        $dados = $request->all();

        Promocoes::create($dados);

        return redirect()->back();

    }

    //Editar promoção no banco
    public function editar(Request $request, $id){

        dd("teste");

    }

    //Excluir promoção no banco
    public function deletar($id){

        $Promocoes = Promocoes::find($id);

        $Promocoes->delete();

        return redirect()->back();;

    }
}
