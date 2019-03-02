<?php

namespace App\Http\Controllers;

use\App\Produto;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);

    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }


    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto.novo');
    }

    public function adiciona(){
        Produto::create(Request::all());
        return redirect('/produtos')->withInput(Request::only('nome'));
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('/produtos');
    }

    public function altera($id){
        return view('produto.alterar')->with('produto',Produto::find($id));
    }

    public function alterado(){
        $produto = Produto::find(Request::input('id'));
        $produto->nome = Request::input('nome');
        $produto->descricao = Request::input('descricao');
        $produto->valor = Request::input('valor');
        $produto->quantidade = Request::input('quantidade');
        
        $produto->save();
        return  redirect('/produtos');
    }

}
