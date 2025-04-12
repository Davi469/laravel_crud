<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="/css/criarCategoria.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <div class="conteiner">
            <div class="card">
                <div class="bannercriarcategoria">
                    <img src="/storage/livros/bannercriarcategoria.png" alt="">
                </div>
                <form class="card-form" action="{{ route('categorias.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="input">
                        <input class="input-field" type="text" name="nome" value="{{ old('nome') }}">
                        <label class="input-label">Nome</label>
                    </div>
                    <div class="input">
                        <input class="input-field" type="text" name="descricao" value="{{ old('descricao') }}">
                        <label class="input-label">Descrição</label>
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button">Adicionar</button>
                    </div>
                    <p class="card-info">Preencha os campos abaixo para adicionar uma nova editora ao catálogo.</p>

                </form>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
