@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #add8e6;">Edição da editora <strong>{{$editora->nome}}</strong>
                <a href="{{ route('editora.show', $editora->id) }}" class="btn btn-outline-dark" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m11.21-6.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407" />
                        </svg></a>
                </div>

                <div class="card-body">
                    <form action="{{route('editora.update', $editora->id)}}" 
                    method="post">
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
            

                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection