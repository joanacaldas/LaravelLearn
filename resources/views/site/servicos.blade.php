
@section('title', 'Serviços')

<style>
 

    .section-title {
        text-align: center;
        margin-top: 10%;
        color: #333;
        padding: 2%;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        color: #4c505b;
        font-weight: bold;
    }

    .card-body {
        color: #4c505b;
    }

    .card {
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
</style>
@extends('site.layout')
@section('content')

<div class="container">
    <h3 class="section-title">Descubra nossos serviços</h3>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Requisição de Livros</h5>
                </div>
                <div class="card-body">
                    <p>Leia aqui ou escolha outro lugar. Solicite seu livro e desfrute da leitura onde preferir.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Acesso a Computadores</h5>
                </div>
                <div class="card-body">
                    <p>Beneficie o acesso aos nossos computadores e à rede Wi-Fi gratuitamente, complementados por serviços de impressão e digitalização de documentos.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Espaços</h5>
                </div>
                <div class="card-body">
                    <p>Utilize as nossas áreas designadas para estudo individual, garantindo um ambiente tranquilo, ou faça uma reserva antecipada das nossas salas, equipadas para colaboração em grupo.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Eventos</h5>
                </div>
                <div class="card-body">
                    <p>Participe de sessões de leitura com autores renomados, integre-se aos nossos clubes de livros especializados e explore as nossas exposições culturais diversificadas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
