@extends('layouts.app')

@section('content')
<div class="container-fluid p-5" style="background-color: #d9c09e;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg" style="background-color: #fff;">
                <div class="card-header text-center" style="background-color: #add8e6; font-size: 2rem; font-weight: bold;">
                    Edição da editora <strong>{{$editora->nome}}</strong>
                </div>

                <div class="card-body">
                    <form action="{{route('editora.update', $editora->id)}}" method="post">
                        @csrf
                        <!-- segurança para utilizar forms -->
                        @method('PUT')
                        <!-- para edição de dados -->

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$editora->nome}}" required>

                            <label for="morada">Morada</label>
                            <input type="text" class="form-control" id="morada" name="morada" value="{{$editora->morada}}" required>

                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$editora->telefone}}" required>
                        </div>

                        <button type="submit" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
</svg></button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection