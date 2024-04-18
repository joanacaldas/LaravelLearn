@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição do sócio {{$socio->nome}}
               
                </div>

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
            

                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection