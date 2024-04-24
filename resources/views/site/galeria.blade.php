
@extends('site.layout')

@section('title', 'Galeria')

<style>
 
    .section-title {
        text-align: center;
        margin-top: 5%;
        color: #333;
        padding: 2%;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .author-title {
        text-align: center;
        margin-top: 2%;
        color: #333;
        padding: 2%;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card {
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
</style>


{{-- define o início da seção de conteúdo --}}
@section('content')

<div class="container">
    <h3 class="section-title">Autor do Mês</h3>
    <h4 class="author-title">Luís Miguel Rocha</h4>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="imagens/autor.jpg" class="card-img-top" alt="autor">
                <div class="card-body">
                    <h5 class="card-title">Luís Miguel Rocha</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="imagens/ultimoPapa.jpg" class="card-img-top" alt="O último Papa">
                <div class="card-body">
                    <h5 class="card-title">O último Papa</h5>
                    <p class="card-text">2006</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="imagens/balaSanta.jpg" class="card-img-top" alt="Bala Santa">
                <div class="card-body">
                    <h5 class="card-title">Bala Santa</h5>
                    <p class="card-text">2007</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="imagens/mentiraSagrada.jpg" class="card-img-top" alt="A mentira sagrada">
                <div class="card-body">
                    <h5 class="card-title">A mentira sagrada</h5>
                    <p class="card-text">2011</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="imagens/filhaPapa.jpg" class="card-img-top" alt="A filha do Papa">
                <div class="card-body">
                    <h5 class="card-title">A filha do Papa</h5>
                    <p class="card-text">2013</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="imagens/resignacao.jpg" class="card-img-top" alt="A resignação">
                <div class="card-body">
                    <h5 class="card-title">A resignação</h5>
                    <p class="card-text">2018</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
