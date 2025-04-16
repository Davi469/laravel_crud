<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>

        <head>
            <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        </head>
        <div style="padding-top: 65px;">
            <img src="/storage/livros/banner.png" alt="" class="w-9/10 mx-auto rounded-2xl" style="width: 80%">
        </div>
        <h2 style="margin: 1% 10%">Titulos mais recentes:</h2>
        <div class=" flex-wrap gap-14 flex justify-center">
            @foreach ($livrosRecentes as $livro)
                <div class="flex items-center p-4 border rounded-lg shadow-md">
                    <img src="{{ Storage::url($livro->image) }} " class="w-34 h-48 object-cover mr-6 rounded-lg">       
                    <div>
                        <h3 class="text-xl font-semibold">{{ $livro->nome }}</h3>
                        <p class="text-gray-600">Autor: {{ $livro->autor }}</p>
                        <p class="text-gray-500 text-sm">Adicionado em: {{ $livro->created_at->format('d/m/Y') }}</p>
                        <a href="{{ route('livros.index') }}" class="text-blue-500 hover:underline mt-2 inline-block">Ver mais...</a>
                    </div>
                </div>
            @endforeach
        </div>
    </body>

    </html>

</x-app-layout>
