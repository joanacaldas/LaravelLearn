@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição do sócio {{$socio->name}}

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
                            <input type="text" class="form-control" id="nome" value="{{$socio->nome}}" placeholder="Enter name">
                            <label for="nome">Cartão de Cidadão</label>
                            <input type="text" class="form-control" id="nome" value="{{$socio->cc}}" placeholder="Cartão de Cidadão">
                            <label for="nome">Morada</label>
                            <input type="text" class="form-control" id="nome" value="{{$socio->morada}}" placeholder="Morada">
                            <label for="nome">Codigo Postal</label>
                            <input type="text" class="form-control" id="nome" value="{{$socio->codigoPostal}}" placeholder="Codigo Postal">
                            <label for="nome">Localidade</label>
                            <input type="text" class="form-control" id="nome" value="{{$socio->codigoPostal}}" placeholder="Localidade">
                            <label for="nome">Telefone</label>
                            <input type="text" class="form-control" id="nome" value="{{$socio->telefone}}" placeholder="Telefone">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{$socio->email}}" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
            

                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection