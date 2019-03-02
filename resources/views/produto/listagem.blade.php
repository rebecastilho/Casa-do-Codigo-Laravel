@extends('layout.principal')
    @section('conteudo')
        
        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
            </div>
        @endif
        
        @if(empty($produtos))
            <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
         @else

            <h1>Listagem de produtos</h1>

            <table class = "table  table-bordered table-hover">
                @foreach($produtos as $p)
                    <tr class= {{$p -> quantidade <= 1 ? "alert-danger" : ""}}>
                        <td> {{ $p-> nome}} </td>
                        <td> {{ $p-> valor}} </td>
                        <td> {{ $p-> descricao}} </td>
                        <td> {{ $p-> quantidade}} </td>
                        <td><a href="/produtos/mostra/{{$p->id}}">Visualizar</a></td>
                        <td><a href="{{url('produtos/remove',$p->id)}}">Deletar</a></td>
                        <td><a href="{{url('produtos/altera',$p->id)}}">Alterar</a></td>
                    </tr>
                @endforeach
            </table>
        @endif

        <h4>
            <span class="badge badge-danger">Um ou menos itens no estoque</span>
        </h4>

    @stop