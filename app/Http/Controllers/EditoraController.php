<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;
use App\Http\Requests\StoreUpdateEditora;

class EditoraController extends Controller
{

    public readonly Editora $editora;

    public function __construct()
    {
        $this->editora = new Editora();
    }

    public function index()
    {
        $editoras = Editora::all();
        return view('editoras', ['editoras' => $editoras]);
    }

    public function create()
    {
        return view('Create/editora_create');
    }

    public function store(StoreUpdateEditora $request)
    {  
        $created = $this->editora->create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'site' => $request->input('site'),
        ]);
    
       
        if ($created) {
            $editoras = Editora::all(); 
            
            return view('editoras', ['editoras' => $editoras]);
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }
    
    

    public function show(Editora $editora)
    {
        $editoras = Editora::all();
        return view('editoras', compact('editoras'));
    }

    public function edit(Editora $editora)
    {
       return view('Edit/editora_edit', ['editora' => $editora]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->editora->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $editoras = Editora::all(); 
            return view('editoras', ['editoras' => $editoras]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    public function destroy(string $id)
    {
        $this->editora->where('id', $id)->delete();

        return redirect()->route('editoras');
    }
}
