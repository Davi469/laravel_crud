<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
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
        $livros = Livro::all();
        return view('livros', ['livros' => $livros]);
    }

    public function create()
    {
        return view('livro_create');
    }

    public function store(StoreUpdateLivro $request)
    {

        $created = $this->livro->create([
            'nome' => $request->input('nome'),
            'autor' => $request->input('autor'),
            'editora' => $request->input('editora'),
            'data_publicacao' => $request->input('data_publicacao'),
            'preco' => $request->input('preco'),
        ]);
        
        if ($created) {
            $livros = Livro::all(); 
            return view('livros', ['livros' => $livros]);
        }
    
        return redirect()->back()->with('message', 'Erro ao criar!');
    }
    

    public function show(Livro $livro)
    {
        return view('livro_show', ['livro' => $livro]);
    }

    public function edit(Livro $livro)
    {
       return view('livro_edit', ['livro' => $livro]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->livro->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $livros = Livro::all(); 
            return view('livros', ['livros' => $livros]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    public function destroy(string $id)
    {
        $this->livro->where('id', $id)->delete();

        return redirect()->route('livros.index');
    }
}