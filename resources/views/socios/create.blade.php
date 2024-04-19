@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #add8e6;">Criar Sócios</div>
                    
                <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
                    @if (session('msg'))
                    <p class="btn btn-info">
                        {{ session('msg') }}
                    </p>
                    @endif
                </div>
                           
                        <p class="btn btn-outline-secondary"><a style= "text-decoration: none;" href="{{route('socio.index')}}">Listar todos os Sócios</a></p>
                           

                        <p class="btn btn-outline-secondary"><a style= "text-decoration: none;" href="{{route('socio.user', Auth::user()->id)}}" >Listar os meus Sócios</a></p>

                        
                <div class="card-body">
                  <form action="{{route('socio.store')}}" method="post">
                  @csrf
                    <fieldset>
                        <h2> Preencha todos os campos </h2>
                        <div>
                       
                            <input class="form-control mb-2" type= "hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id">
                        </div>
                        <div>
                            <label for="nome">Nome</label>
                            <input class="form-control mb-2" type= "text" name="nome" id="nome" required autofocus>
                        </div>
                        <div>
                            <label for="cc">Cartão de Cidadão</label>
                            <input  class="form-control mb-2"type= "text" name="cc" id="cc" required>
                        </div>
                        <div>
                            <label for="morada">Morada</label>
                            <input  class="form-control mb-2"type= "text" name="morada" id="morada" required>
                        </div>  
                         
                       
                        <div>
                            <label for="codigoPostal">Código Postal</label>
                            <input  class="form-control mb-2"type= "text" name="codigoPostal" id="codigoPostal" required>
                        </div> 
                        <div>
                            <label for="localidade">Localidade</label>
                            <input  class="form-control mb-2"type= "text" name="localidade" id="localidade" required>
                        </div> 
                        <div>
                            <label for="email">Email</label>
                            <input  class="form-control mb-2"type= "email" name="email" id="email" required>
                        </div> 
                        <div>
                            <label for="telefone">Telefone</label>
                            <input  class="form-control mb-2"type= "text" name="telefone" id="telefone" required>
                        </div>
                        <button type="submit" value="gravar"> Gravar</button>
                        <button type="reset" value="gravar"> Limpar</button>
                            
                    </fieldset>
                  </form>
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
