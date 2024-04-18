@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição do utilizador {{$user->name}}

                </div>

                <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="post">
                        @csrf
                        <!-- segurança para utilizar forms -->
                        @method('PUT')
                        <!-- para edição de dados -->

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$user->name}}" placeholder="Enter name">

                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$user->password}}">
                            <select name="level" id="">
                                <option value="{{$user->level}}" selected disabled>{{$user->level}}</option>
                                
                                <option value="admin">administrador</option>
                                <option value="utilizador">utilizador</option>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection