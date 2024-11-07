<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link href="/css/editar.css" rel="stylesheet" type="text/css" />
</head>
<body>
@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif

<div class="container" >
	
   
	 <div class="card">
		<div class="card-image">	
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgKW7Em1roppxAB12oqiFYVuv7074I89cLlw&s" alt="">
		</div>
		<form class="card-form" action="{{ route('livros.update',['livro' => $livro->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
			<div class="input">
                <input class="input-field"  type="text" name="nome" value="{{$livro->nome}}">
				<label class="input-label">Titulo</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="autor" value="{{$livro->autor}}">
				<label class="input-label">Autor</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="editora" value="{{$livro->editora}}">
				<label class="input-label">Editora</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="data_publicacao" value="{{$livro->data_publicacao}}">
				<label class="input-label">Data de publicação</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="preco" value="{{$livro->preco}}">
				<label class="input-label">Preço</label>
			</div>
			<div class="action">
				<button type="submit" class="action-button">Atualizar</button>
			</div>
            <p class="card-info">By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
		</form>
       
	
	</div>
</div>

</body>
</html>