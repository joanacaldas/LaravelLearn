@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">


                <div class="card-header" style="background-color: #add8e6;">Ficha de Associado de <strong>{{$socio->nome}}</strong>
                    <a href="{{route('socio.index')}}" class="btn btn-outline-secondary" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m11.21-6.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407" />
                        </svg></a>
                  
                        <a href="{{route('socio.confirma_delete',$socio->id)}}" class="btn btn-outline-secondary" style="float:right"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg></a>
                    <a href="{{route('socio.edit',$socio->id)}}" class="btn btn-outline-secondary" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                        </svg></a>
                </div>

                <div class="card-body">
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