<x-app-layout>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="/css/editar.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">





    </head>

    <body>



        <div class="container" style=" padding-top: 3%; margin: 0 auto;">


            <div class="card">
                <div class="card-image">
                    <img src="{{ Storage::url($livro->image) }}  ">
                </div>
                <form class="card-form" action="{{ route('livros.update', ['livro' => $livro->id]) }}" method="post">
                    @csrf
                    @if (session()->has('message'))
                        <div
                            class="bg-green-100 dark:bg-green-900 border-l-4 border-green-500 dark:border-green-700 text-green-900 dark:text-green-100 p-3 rounded-lg mb-4 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm font-semibold">{{ session('message') }}</p>
                        </div>
                    @endif

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
                        <input class="input-field" type="text" name="nome" value="{{ $livro->nome }}"
                            placeholder=" ">
                        <label class="input-label">Título</label>
                    </div>
                    <div class="input">
                        <input class="input-field" type="text" name="autor" value="{{ $livro->autor }}"
                            placeholder=" ">
                        <label class="input-label">Autor</label>
                    </div>
                    <div class="input">
                        <select class="input-field" name="editora_id" required>
                            <option value="">Selecione uma editora</option>
                            @foreach ($editoras as $editora)
                                <option value="{{ $editora->id }}"
                                    {{ $livro->editora_id == $editora->id ? 'selected' : '' }}>
                                    {{ $editora->nome }}
                                </option>
                            @endforeach
                        </select>
                        <label class="input-label">Editora</label>
                    </div>
                    <div class="input">
                        <select class="input-field" name="categoria_id" required>
                            <option value="">Selecione uma categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}"
                                    {{ $livro->categoria_id == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nome }}
                                </option>
                            @endforeach
                        </select>
                        <label class="input-label">Categoria</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="text" name="data_publicacao"
                            value="{{ \Carbon\Carbon::parse($livro->data_publicacao)->format('d/m/Y') }}"placeholder=" ">
                        <label class="input-label">Data de Publicação</label>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const input = document.querySelector('input[name="data_publicacao"]');

                            input.addEventListener('input', function(e) {
                                let v = input.value.replace(/\D/g, '');
                                if (v.length >= 2) v = v.slice(0, 2) + '/' + v.slice(2);
                                if (v.length >= 5) v = v.slice(0, 5) + '/' + v.slice(5, 9);
                                input.value = v;
                            });
                        });
                    </script>


                    <div class="input">
                        <input class="input-field" type="text" name="preco"
                            value="{{ number_format((float) str_replace(',', '.', $livro->preco), 2, ',', '.') }}"
                            placeholder=" ">
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

                    <div class="action">

                        <button type="submit" class="action-button">Atualizar</button>
                    </div>

                </form>



            </div>
        </div>

    </body>

    </html>
</x-app-layout>
