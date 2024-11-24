<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


</head>
<body  style="background-color: #f5efeb ">
  @include('layouts.navigation')
  <div class="flex mx-20">
    <div class="relative flex flex-col my-6 bg-white border border-slate-200 rounded-lg w-96 p-2 shadow-2xl mx-8 ">
      <div class="relative flex w-full h-6 p-3 pr-12 text-sm text-white bg-red-500 rounded-md">
      </div>
      <div class="p-3">
        <div class="flex items-center mb-2">
            <h5 class=" text-slate-800 text-xl font-extrabold">
            Livros Com Baixo Estoque
            </h5>
        </div>
        <p class="block text-slate-600 leading-normal font-thin mb-4" style="font-size: 25px;">
           10 livros
        </p>
        <div>
            <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
            Learn More
            </a>
        </div>
      </div>
    </div>
  
    <div class="relative flex flex-col my-6 bg-white border border-slate-200 rounded-lg w-96 p-2 shadow-2xl mx-8">
      <div class="relative flex w-full h-6 p-3 pr-12 text-sm text-white bg-yellow-400 rounded-md">
      </div>
      <div class="p-3">
        <div class="flex items-center mb-2">
            <h5 class=" text-slate-800 text-xl font-semibold">
              Quantidade total De Livros
            </h5>
        </div>
        <p class="block text-slate-600 leading-normal font-light mb-4" style="font-size: 25px;">
         200 Livros
        </p>
        <div>
            <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
            Learn More
            </a>
        </div>
      </div>
    </div>
  
    <div class="relative flex flex-col my-6 bg-white border border-slate-200 rounded-lg w-96 p-2 shadow-2xl mx-8">
      <div class="relative flex w-full h-6 p-3 pr-12 text-sm text-white bg-green-400 rounded-md">
      </div>
      <div class="p-3">
        <div class="flex items-center mb-2">
            <h5 class=" text-slate-800 text-xl font-semibold">
              Custo Total Em Livros
            </h5>
        </div>
        <p class="block text-slate-600 leading-normal font-light mb-4" style="font-size: 25px;">
           2.400 R$
        </p>
        <div>
            <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
            Learn More
            </a>
        </div>
      </div>
    </div>

  </div>
</body>
</html>