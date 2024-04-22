<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editoras.index',['editoras'=>Editora::orderby('nome')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('editoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Model socio
         $editora =new Editora();
        // serve para gravar o formulario de inserção do create
        // o request encaminha para a base de dados
        $editora-> id       =$request-> id;
        $editora-> nome             =$request-> nome;
        $editora-> morada           =$request-> morada;
        $editora-> telefone          =$request-> telefone;
        $editora-> contribuinte     =$request-> contribuinte ;
       
        $editora->save();

        return redirect()->route('editora.create')-> with ('msg','O seu registo foi gravado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editora $editora)
    {
        // mostra uma ficha individual
        // $editora só passa o parametro
        return view('editoras.show', ['editora'=>$editora]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editora $editora)
    {
        // serve para chamar o formulario de edição
        // $editora só passa o parametro
        return view('editoras.edit', ['editora' => $editora]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editora $editora)
    {
        // serve para gravar o formulario de edição do edit
        //  o request encaminha para a base de dados e o $editora só passa o parametro
        Editora::findOrFail($editora->id) -> update($request->all());
        return redirect()->route('editora.show', $editora->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editora $editora)
    {
        // serve para apagar um registo
       // $editora só passa o parametro
       Editora::findOrFail ($editora->id)->delete();
      return redirect()->route('editora.index');
    }
    public function confirma_delete_editora (Editora $id)
    {
        return view('editoras.confirma_delete_editora', ['id' => $id]);
    }
}
