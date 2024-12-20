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
    @if (session()->has('message'))
    {{ session()->get('message') }}   
@endif
@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<div class="card">
<form class="card-form" action="{{ route('livros.store',)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="input">
        <input class="input-field"  type="text" name="nome" value="{{ old('nome')}}">
        <label class="input-label">Titulo</label>
    </div>
    <div class="input">
        <input class="input-field" type="text" name="autor" value="{{ old('autor')}}">
        <label class="input-label">Autor</label>
    </div>
    <div class="input">
        <input class="input-field" type="text" name="data_publicacao" value="{{ old('data_publicacao')}}">
        <label class="input-label">Data de publicação</label>
    </div>
    <div class="input">
        <input class="input-field" type="text" name="preco" value="{{ old('preco')}}">
        <label class="input-label">Preço</label>
    </div>
    
    <div class="input">
        <input id="selecao" class="image-input" type="file" name="image" value="{{ old('image') }}">
        <label for="selecao"  id="label">Imagem</label>
    </div>
    <div>
        
        <select name="editora_id" id="editora_id" required>
            <option value="">Selecione uma editora</option>
            @foreach ($editoras as $editora)
                <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
            @endforeach
        </select>
    </div>
    
    
    <div class="action">
        <button type="submit" class="action-button">Adicionar</button>
    </div>
    <p class="card-info">By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
</form>
</div>
</body>
</html>
</x-app-layout>
