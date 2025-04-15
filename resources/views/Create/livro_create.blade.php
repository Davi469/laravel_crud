<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="/css/criar.css">
    </head>

    <body>


        <div class="conteiner">
            <div class="card">
                @if ($errors->any())
                    <div
                        class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-3 rounded-lg mb-4">
                        @foreach ($errors->all() as $error)
                            <p class="text-sm font-semibold">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form class="card-form" action="{{ route('livros.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="input">
                        <input class="input-field" type="text" name="nome" value="{{ old('nome') }}">
                        <label class="input-label">Titulo</label>
                    </div>
                    <div class="input">
                        <input class="input-field" type="text" name="autor" value="{{ old('autor') }}">
                        <label class="input-label">Autor</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="date" name="data_publicacao"
                            value="{{ old('data_publicacao', isset($livro) ? \Carbon\Carbon::parse($livro->data_publicacao)->format('d/m/Y') : '') }}"
                            style="width: 100%; margin: 2% 0%;">
                        <label class="input-label">Data de Publicação</label>
                    </div>


                    <div class="input">
                        <input class="input-field" type="text" name="preco" value="{{ old('preco') }}">
                        <label class="input-label">Preço</label>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const precoInput = document.querySelector('input[name="preco"]');

                            precoInput.addEventListener('input', function() {
                                let valor = precoInput.value.replace(/\D/g, '');
                                valor = (parseInt(valor, 10) / 100).toFixed(2);
                                valor = valor.replace('.', ',');
                                valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                precoInput.value = valor;
                            });
                        });
                    </script>

                    <div class="input">
                        <input id="selecao" class="image-input" type="file" name="image"
                            value="{{ old('image') }}">
                        <label for="selecao" id="label">Imagem</label>
                    </div>
                    <div>

                        <select name="editora_id" id="editora_id" required>
                            <option value="">Selecione uma editora</option>
                            @foreach ($editoras as $editora)
                                <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>

                        <select name="categoria_id" id="categoria_id" required>
                            <option value="">Selecione uma Categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="action">
                        <button type="submit" class="action-button">Adicionar</button>
                    </div>
                    <p class="card-info">Preencha os campos acima para adicionar um novo livro ao catálogo.</p>
                </form>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
