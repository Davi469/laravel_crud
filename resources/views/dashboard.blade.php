

<x-app-layout>
    @php
    $livros = \App\Models\Livro::all();
    @endphp
   

    @include('livros')
</x-app-layout>
