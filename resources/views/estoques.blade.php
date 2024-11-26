<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estoque</title>
      <link href="/css/livros.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body>
      <div class="home-section">
      <div id="tabela">
   
          <div id="conteiner">
              
              <table class="styled-table">
                 
                  <div id="button">
                      <button><a href="{{ route('estoques.create')}}">Adicionar</a></button>
                  </div>
                  <thead>
                      <tr>
                          <th style="border-top-left-radius: 10px;">Livro</th>
                          <th>Tipo</th>
                          <th>Quantidade</th>
                          <th>Responsavel</th>
                          <th style="border-top-right-radius: 10px;">Açoes</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($estoques as $estoque)
                      <tr> 
                          <td data-title="livro_id">{{ $estoque->livro->nome ?? 'Sem livro' }}</td>
                          <td data-title="tipo">{{$estoque->tipo}}</td>
                          <td data-title="quantidade">{{$estoque->quantidade}}</td>
                          <td data-title="responsavel">{{$estoque->responsavel}}</td>

                          <td>
                              <div class="botoes">
                                  <a href="{{ route('estoques.edit',['estoque' => $estoque->id])}}">Editar</a>
                                  <a href="{{ route('estoques.show',['estoque' => $estoque->id])}}">Mostrar</a>
                              </div>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  </body>
  </html>

</x-app-layout>
