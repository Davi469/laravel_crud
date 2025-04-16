<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateLivrosCreate;
use App\Models\Editora;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Categoria;

use App\Http\Requests\StoreUpdateLivro;

class LivroController extends Controller
{

    public readonly Livro $livro;

    public function __construct()
    {
        $this->livro = new Livro();
    }

    public function index()
    {
        $livros = Livro::with('editora')->get();
        return view('livros', ['livros' => $livros]);
    }

    public function create()
    {
        $editoras = Editora::all();
        $categorias = Categoria::all();
    
        return view('Create/livro_create', compact('editoras', 'categorias'));
    }
    

    public function store(StoreUpdateLivrosCreate $request)
    {

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')->store('livros', 'public');
        } else {

            $imagePath = null;
        }


        $created = $this->livro->create([
            'nome' => $request->input('nome'),
            'autor' => $request->input('autor'),
            'editora_id' => $request->input('editora_id'),
            'data_publicacao' => $request->input('data_publicacao'),
            'categoria_id' => $request->input('categoria_id'),
            'preco' => $request->input('preco'),
            'image' => $imagePath,
        ]);


        if ($created) {
            $livros = Livro::all();

            return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso!');

        }

        return redirect()->back()->with('message', 'Erro ao criar!');
    }



    public function show(Livro $livro)
    {
        $livros = Livro::all();
        return view('livros', compact('livros'));
    }

    public function edit(Livro $livro)
    {
        $editoras = Editora::all();
        $categorias = Categoria::all();
    
        return view('Edit/livro_edit', compact('livro', 'editoras', 'categorias'));
    }
    

    public function update(StoreUpdateLivro $request, string $id)
    {
        $dataFormatada = \Carbon\Carbon::createFromFormat('d/m/Y', $request->data_publicacao)->format('Y-m-d');

    
        $precoFormatado = str_replace(',', '.', $request->preco);

    
        $request->merge([
            'data_publicacao' => $dataFormatada,
            'preco' => $precoFormatado,
        ]);


        $updated = $this->livro->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            $livros = Livro::all();
            return redirect()->route('livros.index')->with('atualizado', 'Livro atualizado com sucesso!');
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    public function destroy(string $id)
    {
        $this->livro->where('id', $id)->delete();

        return redirect()->route('livros.index')->with('excluido', 'Livro excluido com sucesso!');
    }
}
