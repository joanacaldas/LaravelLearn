@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #add8e6;">Criar Editoras</div>
                    
                        @if (session('msg'))
                        <p class="btn btn-info">
                            {{
                                session('msg')
                            }}
                            </p>
                        @endif
                           
                        <p class="btn btn-outline-secondary"><a style= "text-decoration: none;" href="">Listar todas as Editoras</a></p>
                       

                        
                <div class="card-body">
                  <form action="" method="post">
                  @csrf
                    <fieldset>
                        <h2> Preencha todos os campos </h2>
                        <div>
                       
                            <input class="form-control mb-2" type= "hidden" name="editora_id" value="{{Auth::editora()->id}}" id="editora_id">
                        </div>
                        <div>
                            <label for="nome">Nome</label>
                            <input class="form-control mb-2" type= "text" name="nome" id="nome" required autofocus>
                        </div>
                        <div>
                            <label for="morada">Morada</label>
                            <input  class="form-control mb-2"type= "text" name="morada" id="morada" required>
                        </div>  
                        <div>
                            <label for="telefone">Telefone</label>
                            <input  class="form-control mb-2"type= "text" name="telefone" id="telefone" required>
                        </div>
                        <div>
                            <label for="contribuinte">Contribuinte</label>
                            <input  class="form-control mb-2"type= "text" name="contribuinte" id="contribuinte" required>
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
