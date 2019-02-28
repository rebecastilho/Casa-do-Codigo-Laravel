<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->with('produtos' , $produtos);
    }

    public function mostra(){

        $idProduto = Request::route('id');
        $resultado =  DB::table('produtos')->where('id', $idProduto)->get();
        
        if(empty($resultado[0])) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p',$resultado[0]);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        $dados = Request::except('_token');
        DB::table('produtos')->insert(
            [$dados]
        );
        return redirect('/produtos')->withInput(Request::only('nome'));
    }
}
