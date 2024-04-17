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
        // lista todas as editoras 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // serve para chamar o formulario de inserção
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // serve para gravar o formulario de inserção do create
        // o request encaminha para a base de dados
    }

    /**
     * Display the specified resource.
     */
    public function show(Editora $editora)
    {
        // mostra uma ficha individual
        // $editora só passa o parametro
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editora $editora)
    {
        // serve para chamar o formulario de edição
        // $editora só passa o parametro
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editora $editora)
    {
        // serve para gravar o formulario de edição do edit
        //  o request encaminha para a base de dados e o $editora só passa o parametro
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editora $editora)
    {
        // serve para apagar um registo
       // $editora só passa o parametro
    }
}
