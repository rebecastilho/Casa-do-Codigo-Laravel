@extends('layout.principal')
@section('conteudo')
    <h1>Alterar Produto</h1>
       <form action='/produtos/alterado/{{$produto->id}}' method='post'>
            

            <div class="form-group">
                <label>Nome</label> <input value={{$produto->nome}} name="nome" class="form-control">
            </div>
            

            <div class="form-group">
                <label>Descricao</label><input value={{$produto->descricao}} name="descricao" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Valor</label> <input name="valor" value={{$produto->valor}}  class="form-control">
            </div>
            
            <div class="form-group">
                <label>Quantidade</label><input name="quantidade"  value={{$produto->quantidade}} type="number" class="form-control">
            </div>

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            
            <button type="submit" class="btn btn-primary btn-block">Alterar</button>
        </form>
@stop