@extends('master')

@section('content')


<div id="tabela">
     
    <div id="conteiner">
        
        <table class="styled-table">
           
            <div id="button">
                <button><a href="{{ route('livros.create')}}">Adicionar</a></button>
            </div>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Preço</th>
                    <th>Editora</th>
                    <th>Data de publicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)
                <tr>
                    <td data-title="Nome">{{$livro->nome}}</td>
                    <td data-title="Autor">{{$livro->autor}}</td>
                    <td data-title="Preço">{{$livro->preco}}</td>
                    <td data-title="Editora">{{$livro->editora}}</td>
                    <td data-title="Data de publicação">{{$livro->data_publicacao}}</td>
                    <td>
                        <div class="botoes">
                            <a href="{{ route('livros.edit',['livro' => $livro->id])}}">Editar</a>
                            <a href="{{ route('livros.show',['livro' => $livro->id])}}">Mostrar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
