<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/criar.css" rel="stylesheet" type="text/css" />
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
<form class="card-form" action="{{ route('estoques.store',)}}" method="post">
@csrf
<div>  
    <select name="livro_id" id="livro_id" required>
        <option value="">Selecione um livro</option>
        @foreach ($livros as $livro)
            <option value="{{ $livro->id }}">{{ $livro->nome }}</option>
        @endforeach
    </select>
</div>
<div>  
    <select name="tipo" id="tipo_id" required>
        <option value="">Selecione o tipo</option>
        <option value="Entrada">Entrada</option>
        <option value="Saida">Saida</option>
    </select>
</div>
<div class="input">
    <input class="input-field" type="text" name="quantidade" value="{{ old('quantidade')}}">
    <label class="input-label">Quantidade</label>
</div>
<div class="input">
    <input class="input-field" type="text" name="responsavel" value="{{ old('responsavel')}}">
    <label class="input-label">Responsavel</label>
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
