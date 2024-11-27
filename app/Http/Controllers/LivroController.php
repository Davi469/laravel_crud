<?php

namespace App\Http\Controllers;
use App\Models\Editora;

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
        $livros = Livro::with('editora')->get();
        return view('livros', ['livros' => $livros]);
    }

    public function create()
    {
        $editoras = Editora::all();
        return view('Create/livro_create', compact('editoras'));
    }

    public function store(StoreUpdateLivro $request)
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
            'preco' => $request->input('preco'),
            'image' => $imagePath,
        ]);


        if ($created) {
            $livros = Livro::all();

            return redirect()->route('livros.index')->with('message', 'Livro criado com sucesso!');

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
        return view('Edit/livro_edit', compact('livro', 'editoras'));
    }

    public function update(StoreUpdateLivro $request, string $id)
    {
        $updated = $this->livro->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
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
