@extends('master')

@section('delete_css')
    <link href="/css/delete.css" rel="stylesheet">
@endsection

@section('content')


<h2>Livro - {{ $livro->nome }}</h2>

<div class="card">
<form class="card-form" action="{{ route('livros.destroy',['livro' => $livro->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="DELETE" class="input-field">
    <button id="button">Deletar</button>


</div>


@endsection