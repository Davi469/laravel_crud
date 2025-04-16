<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\StoreUpdateCategoria;

class CategoriaController extends Controller
{

    public readonly Categoria $categoria;

    public function __construct()
    {
        $this->categoria = new Categoria();
    }

    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view('Create/categoria_create');
    }

    public function store(StoreUpdateCategoria $request)
    {  
        $created = $this->categoria->create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);
    
       
        if ($created) {
            $categorias = Categoria::all(); 
            
            return redirect()->route('categorias.index')->with('success', 'Categoria criado com sucesso!');
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }
    
    

    public function show(Categoria $categoria)
    {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    public function edit(Categoria $categoria)
    {
       return view('Edit/categoria_edit', ['categoria' => $categoria]);
    }

    public function update(StoreUpdateCategoria $request, string $id)
    {
        $updated = $this->categoria->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $categorias = Categoria::all(); 
            return redirect()->route('categorias.index')->with('atualizado', 'Categoria atualizada com sucesso!');
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    public function destroy(string $id)
    {
        $this->categoria->where('id', $id)->delete();

        return redirect()->route('categorias.index')->with('excluido', 'Editora excluida com sucesso!');
    }
}
