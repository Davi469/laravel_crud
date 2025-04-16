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
            <form class="card-form" action="{{ route('editoras.update',['editora' => $editora->id]) }}" method="post">
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
                    <input class="input-field" type="text" name="nome" value="{{$editora->nome}}" placeholder=" ">
                    <label class="input-label">Nome</label>
                </div>			
                <div class="input">
                    <input  id="telefone_editora_edit" class="input-field" type="text" name="telefone" value="{{$editora->telefone}}" placeholder=" ">
                    <label class="input-label">Telefone</label>
                </div>
                <div class="input">
                    <input class="input-field focus:outline-none" type="text" name="email" value="{{$editora->email}}" placeholder=" ">
                    <label class="input-label">E-mail</label>
                </div>
                <div class="input">
                    <input class="input-field" type="text" name="site" value="{{$editora->site}}" placeholder=" ">
                    <label class="input-label">Site</label>
                </div>
                <div class="action">
                    <button type="submit" class="action-button">Atualizar</button>
                </div>
                
               
            </form>
           
        
        </div>
    </div>
    <script>
        document.getElementById('telefone_editora_edit').addEventListener('input', function(event) {
            let input = event.target.value;

            input = input.replace(/\D/g, '');

            if (input.length > 11) {
                input = input.substring(0, 11);
            }
            if (input.length <= 2) {
                input = input.replace(/^(\d{0,2})/, '($1');
            } else if (input.length <= 7) {
                input = input.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
            } else {
                input = input.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
            }

            event.target.value = input;
        });
       </script>
    </body>
    </html>
    </x-app-layout>