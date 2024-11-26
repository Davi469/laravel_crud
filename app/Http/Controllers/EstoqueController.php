<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Livro;

use App\Http\Requests\StoreUpdateEstoque;

class EstoqueController extends Controller
{

    public readonly Estoque $estoque;

    public function __construct()
    {
        $this->estoque = new Estoque();
    }

    public function index()
    {
        $estoques = Estoque::with('livro')->get();
        return view('estoques', ['estoques' => $estoques]);
    }

    public function create()
    {
        $livros = Livro::all();
        return view('Create/estoque_create', compact('livros'));
    }

    public function store(StoreUpdateEstoque $request)
    {
        $created = $this->estoque->create([
            'livro_id' => $request->input('livro_id'),
            'tipo' => $request->input('tipo'),
            'quantidade' => $request->input('quantidade'),
            'responsavel' => $request->input('responsavel'),
        ]);


        if ($created) {
            $estoques = Estoque::all();

            return redirect()->route('estoques.index')->with('message', 'Estoque criado com sucesso!');

        }

        return redirect()->back()->with('message', 'Erro ao criar!');
    }



    public function show(Estoque $estoque)
    {
        $estoques = Estoque::all();
        return view('estoques', compact('estoques'));
    }

    public function edit(Estoque $estoque)
    {
        $livros = Livro::all();
        return view('Edit/estoque_edit', compact('estoque', 'livros'));
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->estoque->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            $estoques = Estoque::all();
            return view('estoques', ['estoques' => $estoques]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    public function destroy(string $id)
    {
        $this->estoque->where('id', $id)->delete();

        return redirect()->route('estoques.index');
    }
}
