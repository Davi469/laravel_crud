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
        @if (session()->has('message'))
        {{ session()->get('message') }}   
    @endif
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
   
    <div class="container" style=" padding-top: 3%; margin: 0 auto;">
        
       
         <div class="card">
            <form class="card-form" action="{{ route('editoras.update',['editora' => $editora->id]) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="input">
                    <input class="input-field" type="text" name="nome" value="{{$editora->nome}}" placeholder=" ">
                    <label class="input-label">Nome</label>
                </div>			
                <div class="input">
                    <input class="input-field" type="text" name="telefone" value="{{$editora->telefone}}" placeholder=" ">
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
    
    </body>
    </html>
    </x-app-layout>