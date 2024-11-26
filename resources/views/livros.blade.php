
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link href="/css/livros.css" rel="stylesheet" type="text/css" />
     

    </head>
    <body>
        <div class="main conteiner" id="main"></div>
        <div id="tabela">
     
            <div id="conteiner" >
                
                <table class="styled-table">
                   
                    <div id="button">
                        <button><a href="{{ route('livros.create')}}">Adicionar</a></button>
                    </div>
                    <thead>
                        <tr>
                            <th style="border-top-left-radius: 10px;">Imagem</th>
                            <th>Nome</th>
                            <th>Autor</th>
                            <th>Preço</th>
                            <th>Editora</th>
                            <th>Data de publicação</th>
                            <th style="border-top-right-radius: 10px;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                        <tr>
                            <td id="Imagem"><img src="{{ Storage::url($livro->image) }}" alt="" id="shadow"></td> 
                            <td data-title="Nome">{{$livro->nome}}</td>
                            <td data-title="Autor">{{$livro->autor}}</td>
                            <td data-title="Preço">{{$livro->preco}}</td>
                            <td data-title="editora_id">{{ $livro->editora->nome ?? 'Sem editora' }}</td>
                            <td data-title="Data de publicação">{{$livro->data_publicacao}}</td>
                            <td>
                                <div class="botoes" style="display: flex">
                                    <a href="{{ route('livros.edit',['livro' => $livro->id])}}">Editar</a>
                                    <form action="{{ route('livros.destroy',['livro' => $livro->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="margin-left: 5px;">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    
    </body>
    </html>

</x-app-layout>
