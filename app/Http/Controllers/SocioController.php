<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function socios_user(User $id)
     {
        $user=User::where('id',$id->id)->first();
        $socios=$user->socios()->get();
        return view('socios.socios_user',['socios'=>$socios]);
    }
     

     public function index()
    {
      return view('socios.index',['socios'=>Socio::orderby('nome')->paginate(10)]);
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('socios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Model socio
        $socio=new Socio();

        //cada campo vai corresponder a um campo da tabela
        //colocar pela mesma sequencia da tabela na base de dados
        $socio-> user_id       =$request-> user_id;
        $socio-> nome           =$request-> nome;
        $socio-> cc             =$request-> cc;
        $socio-> morada         =$request-> morada;
        $socio-> codigoPostal   =$request-> codigoPostal;
        $socio-> localidade     =$request-> localidade;
        $socio-> email          =$request-> email;
        $socio-> telefone       =$request-> telefone;

        $socio->save();

        return redirect()->route('socio.create')-> with ('msg','O seu registo foi gravado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Socio $socio)
    {
        //
        return view('socios.show', ['socio'=>$socio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Socio $socio)
    {
        //return 'Edição do sócio'. $socio->nome;
        return view('socios.edit', ['socio' => $socio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Socio $socio)
    {
      // return 'Edição do sócio'. $socio->nome;
      
    Socio::findOrFail($socio->id) -> update($request->all());
        return redirect()->route('socio.show', $socio->id);
    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Socio $socio)
    {
      //return 'Vai eliminar o sócio' . $socio->nome;

      Socio::findOrFail ($socio->id)->delete();
      return redirect()->route('socio.index');
        
    }

    public function confirma_delete (Socio $id)
    {
        return view('socios.confirma_delete', ['id' => $id]);
    }
}
