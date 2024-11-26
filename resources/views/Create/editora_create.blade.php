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
<form class="card-form" action="{{ route('editoras.store',)}}" method="post" enctype="multipart/form-data">
@csrf
<div class="input">
    <input class="input-field"  type="text" name="nome" value="{{ old('nome')}}">
    <label class="input-label">Nome</label>
</div>
<div class="input">
    <input class="input-field" type="text" name="telefone" value="{{ old('telefone')}}">
    <label class="input-label">Telefone</label>
</div>
<div class="input">
    <input class="input-field" type="text" name="email" value="{{ old('email')}}">
    <label class="input-label">Email</label>
</div>
<div class="input">
    <input class="input-field" type="text" name="site" value="{{ old('site')}}">
    <label class="input-label">Site</label>
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
