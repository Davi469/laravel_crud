<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar</title>
        <link href="/css/editoraEditar.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    </head>
    <body>

   
    <div class="container" style=" padding-top: 3%; margin: 0 auto;">
        
       
         <div class="card">
            <form class="card-form" action="{{ route('estoques.update',['estoque' => $estoque->id]) }}" method="post">
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
                    <select class="input-field" name="livro_id" required>
                        <option value="">Selecione um livro</option>
                        @foreach ($livros as $livro)
                            <option value="{{ $livro->id }}" 
                                    {{ $estoque->livro_id == $livro->id ? 'selected' : '' }}>
                                {{ $livro->nome }}
                            </option>
                        @endforeach
                    </select>
                    <label class="input-label">Livro</label>
                </div>	
                <div class="input">
                    <select class="input-field" name="tipo" required>
                        <option value="">Selecione o tipo</option>
                        <option value="Entrada" {{ $estoque->tipo == 'Entrada' ? 'selected' : '' }}>Entrada</option>
                        <option value="Saida" {{ $estoque->tipo == 'Saida' ? 'selected' : '' }}>Saída</option>
                    </select>
                    <label class="input-label">Tipo</label>
                </div>                
                <div class="input">
                    <input class="input-field focus:outline-none" type="text" name="quantidade" value="{{$estoque->quantidade}}" placeholder=" ">
                    <label class="input-label">Quantidade</label>
                </div>
                <div class="input">
                    <input class="input-field" type="text" name="responsavel" value="{{$estoque->responsavel}}" placeholder=" ">
                    <label class="input-label">Responsavel</label>
                </div>
                <div class="action">
                    <button type="submit" class="action-button">Atualizar</button>
                </div>
               
            </form>
           
        
        </div>
    </div>
    
    </body>
    </html>
    </x-app-layout>