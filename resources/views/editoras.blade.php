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
        <div class="home-section">
        <div id="tabela">
     
            <div id="conteiner">
                
                <table class="styled-table">
                   
                    <div id="button">
                        <button><a href="{{ route('editoras.create')}}">Adicionar</a></button>
                    </div>
                    <thead>
                        <tr>
                            <th style="border-top-left-radius: 10px;">Nome</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Site</th>
                            <th style="border-top-right-radius: 10px;">Açoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($editoras as $editora)
                        <tr> 
                            <td data-title="Nome">{{$editora->nome}}</td>
                            <td data-title="Telefone">{{$editora->telefone}}</td>
                            <td data-title="Email">{{$editora->email}}</td>
                            <td data-title="Site">{{$editora->site}}</td>

                            <td>
                                <div class="botoes">
                                    <a href="{{ route('editoras.edit',['editora' => $editora->id])}}">Editar</a>
                                    <form action="{{ route('editoras.destroy',['editora' => $editora->id]) }}" method="POST">
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
    </div>
    </body>
    </html>

</x-app-layout>
