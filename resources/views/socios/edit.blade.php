@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #add8e6;">Edição do sócio <strong>{{$socio->nome}} </strong>
                <a href="{{ route('socio.show', $socio->id) }}" class="btn btn-outline-secondary" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m11.21-6.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407" />
                        </svg></a></div>
                

                <div class="card-body">
                    <form action="{{route('socio.update', $socio->id)}}" 
                    method="post">
                        @csrf
                        <!-- segurança para utilizar forms -->
                        @method('PUT')
                        <!-- para edição de dados -->

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$socio->nome}}" required>
                            
                            <label for="cc">Cartão de Cidadão</label>
                            <input type="text" class="form-control" id="cc"  name="cc" value="{{$socio->cc}}" required>
                            
                            <label for="morada">Morada</label>
                            <input type="text" class="form-control" id="morada" name="morada" value="{{$socio->morada}}" required>
                            
                            <label for="codigoPostal">Codigo Postal</label>
                            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" value="{{$socio->codigoPostal}}" required>
                            
                            <label for="localidade">Localidade</label>
                            <input type="text" class="form-control" id="localidade" name="localidade" value="{{$socio->localidade}}" required>
                           
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$socio->telefone}}" required>
                            
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$socio->email}}" required>
                            
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