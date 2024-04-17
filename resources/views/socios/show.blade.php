@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header" style="background-color: lightyellow;">Ficha de Associado de <strong>{{$socio->nome}}</strong> <a href="{{route('socio.user', Auth::user()->id)}}" class="btn btn-outline-dark" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-btn-fill" viewBox="0 0 16 16">
  <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m11.21-6.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407"/>
</svg></a></div>

                <div class="card-body" >
    <table class="table">
        
        <tbody>
        <tr>
                <td><strong>Id</strong></td>
                <td>{{ $socio->id }}</td>
            </tr>
            <tr>
                <td><strong>Nome</strong></td>
                <td>{{ $socio->nome }}</td>
            </tr>
            <tr>
                <td><strong>Cartão de Cidadão</strong></td>
                <td>{{ $socio->cc }}</td>
            </tr>
            <tr>
                <td><strong>Morada</strong></td>
                <td>{{ $socio->morada }}</td>
            </tr>
            <tr>
                <td><strong>Código Postal</strong></td>
                <td>{{ $socio->codigoPostal }}</td>
            </tr>
            <tr>
                <td><strong>Localidade</strong></td>
                <td>{{ $socio->localidade }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{ $socio->email }}</td>
            </tr>
            
            <tr>
                <td><strong>Telefone</strong></td>
                <td>{{ $socio->telefone }}</td>
            </tr>
           
            
        </tbody>
    </table>
</div>

                <div class="card-body">
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
