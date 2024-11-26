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
		

@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif

     <button id="botao_voltar" >
		<i class="ri-arrow-left-line"></i>
		<a href="{{route('livros.index')}}">
		Voltar
		</a>
	 </button>


<div class="container" >
	
   
	 <div class="card">
		<div class="card-image">	
			<img src="{{ Storage::url($livro->image) }}  ">
		</div>
		<form class="card-form" action="{{ route('livros.update',['livro' => $livro->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
			<div class="input">
				<input class="input-field" type="text" name="nome" value="{{$livro->nome}}" placeholder=" ">
				<label class="input-label">Título</label>
			</div>			
            <div class="input">
                <input class="input-field" type="text" name="autor" value="{{$livro->autor}}" placeholder=" ">
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
                <input class="input-field" type="text" name="data_publicacao" value="{{$livro->data_publicacao}}" placeholder=" ">
				<label class="input-label">Data de publicação</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="preco" value="{{$livro->preco}}" placeholder=" ">
				<label class="input-label">Preço</label>
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
