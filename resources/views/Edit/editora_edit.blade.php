<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar</title>
        <link href="/css/editoraEditar.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    @if (session()->has('message'))
        {{ session()->get('message') }}   
    @endif
    
    <div class="container" >
        
       
         <div class="card">
            <form class="card-form" action="{{ route('editoras.update',['editora' => $editora->id]) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="input">
                    <input class="input-field" type="text" name="nome" value="{{$editora->nome}}" placeholder=" ">
                    <label class="input-label">Nome</label>
                </div>			
                <div class="input">
                    <input class="input-field" type="text" name="autor" value="{{$editora->telefone}}" placeholder=" ">
                    <label class="input-label">Telefone</label>
                </div>
                <div class="input">
                    <input class="input-field focus:outline-none" type="text" name="editora" value="{{$editora->email}}" placeholder=" ">
                    <label class="input-label">E-mail</label>
                </div>
                <div class="input">
                    <input class="input-field" type="text" name="data_publicacao" value="{{$editora->site}}" placeholder=" ">
                    <label class="input-label">Site</label>
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