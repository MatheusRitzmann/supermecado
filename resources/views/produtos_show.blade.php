@extends('template')

@section('conteudo')

                    <h1>Produtos</h1>
                    <table class="table">
                        <thead>    
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço</th>   
                            <th>Operações</th>   
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                        <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td><a href="#{{route('produtos.alterar', ['id' => $produto ->id])}}"></a>Alterar</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                 <div class="row">
                    <a href="{{ route('produtos.novo') }}"class="btn btn-primary">Novo</a>
                    

@endsection                  
               