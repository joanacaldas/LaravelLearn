@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #add8e6;">Edição do utilizador {{$user->name}}
                <a href="{{ route('user.index') }}" class="btn btn-outline-dark" style="float:right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m11.21-6.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407" />
                        </svg></a>
                </div>

                <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="post">
                        @csrf
                        <!-- segurança para utilizar forms -->
                        @method('PUT')
                        <!-- para edição de dados -->

                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="Enter name">

                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$user->password}}" name="password">
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