<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar</title>
</head>
<body>
    
<h2>Editora - {{ $editora->nome }}</h2>

<div class="card">
<form class="card-form" action="{{ route('editoras.destroy',['editora' => $editora->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="DELETE" class="input-field">
    <button id="button">Deletar</button>


</div>
</body>
</html>