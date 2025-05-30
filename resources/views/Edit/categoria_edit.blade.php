<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar</title>
        <link href="/css/editarCategoria.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    </head>

    <body>
      

        <div class="container" style=" padding-top: 3%; margin: 0 auto;">


            <div class="card">
                <div class="editarcategoria">
                    <img src="/storage/livros/editarcategoria.png" alt="">
                </div>
                <form class="card-form" action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}"
                    method="post">
                    @csrf
                    @if ($errors->any())
                    <div
                        class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-3 rounded-lg mb-4">
                        @foreach ($errors->all() as $error)
                            <p class="text-sm font-semibold">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                    <input type="hidden" name="_method" value="PUT">
                    <div class="input">
                        <input class="input-field" type="text" name="nome" value="{{ $categoria->nome }}"
                            placeholder=" ">
                        <label class="input-label">Nome</label>
                    </div>
                    <div class="input">
                        <input class="input-field" type="text" name="descricao" value="{{ $categoria->descricao }}"
                            placeholder=" ">
                        <label class="input-label">Descrição</label>
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button">Atualizar</button>
                    </div>
                    <p class="card-info">Preencha os campos abaixo para editar a sua categoria.</p>

                </form>


            </div>
        </div>

    </body>

    </html>
</x-app-layout>
