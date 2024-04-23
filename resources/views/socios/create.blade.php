@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #add8e6;">Criar sócios</div>
                    
                <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
                    @if (session('msg'))
                    <p class="btn btn-info">
                        {{ session('msg') }}
                    </p>
                    @endif
                </div>
                           
            
                  <form action="{{route('socio.store')}}" method="post">
                  @csrf
                    <fieldset>
                        <h2 class="text-center mb-4"> Preencha todos os campos </h2>
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
                        <button type="submit" value="gravar"class="btn btn-outline-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
</svg></button>
                        <button type="reset" value="gravar"class="btn btn-outline-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z"/>
</svg></button>
                            
                    </fieldset>
                  </form>
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection