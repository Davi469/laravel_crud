<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link href="/css/livros.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">



    </head>

    <body>
        <div id="bannercategoria" style="padding-top: 65px">
            <img src="/storage/livros/bannercategoria.png" alt="" class=" rounded-2xl" style=" width: 70%; margin: 0 auto;">
        </div>

    
       
        <div class="main conteiner" id="main"></div>
        <div id="tabela">

            <div id="conteiner">

                <table class="styled-table">
                    @if (session('success'))
                        <div class="space-y-2 p-4">
                            <div role="alert"
                                class="bg-green-100 dark:bg-green-900 border-l-4 border-green-500 dark:border-green-700 text-green-900 dark:text-green-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-green-200 dark:hover:bg-green-800 transform hover:scale-105">
                                <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                    class="h-5 w-5 flex-shrink-0 mr-2 text-green-600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"
                                        stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                                <p class="text-xs font-semibold">Categoria criado com sucesso!</p>
                            </div>
                    @endif
                    @if (session('excluido'))
                        <div role="alert"
                            class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-red-200 dark:hover:bg-red-800 transform hover:scale-105 mb-4">
                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                class="h-5 w-5 flex-shrink-0 mr-2 text-red-600" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"
                                    stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            <p class="text-xs font-semibold">Categoria excluido com sucesso!</p>
                        </div>
            </div>
            @endif



            <div id="button">
                <button><a href="{{ route('categorias.create') }}">Adicionar</a></button>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th style="border-top-right-radius: 10px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td data-title="Id">{{ $categoria->id }}</td>
                        <td data-title="Nome">{{ $categoria->nome }}</td>
                        <td data-title="Descricao">{{ $categoria->descricao }}</td>
                        <td>
                            <div class="botoes" style="display: flex">
                                <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}">Editar</a>
                                <form action="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}"
                                    method="POST">
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
