@extends('templates.main')

<!--Alterar titulo-->
@section('title', 'Usuário')

@section('content')

<div class="container-fluid bg-dark text-light mb-5">
    <h1 class="text-center ">Visuzalizar Dados do Usuário: {{$usuario->name}}</h1>
</div>

<div class="col-11 mb-5  m-auto">
    <hr class="mb-4 pt-5 text-light">
    <hr class="">

    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Password</th>
                <th scope="col">Token</th>
                <th scope="col">Data de cadastro</th>
                <th scope="col">Data de Atualização</th>
            </tr>
        </thead>

            <tbody>
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->username}}</td>
                    <td>{{$usuario->name}}</td>
                    <td><input type="password" value="{{$usuario->password}}" maxlength="4" readonly></td>
                    <td>{{$usuario->remember_token}}</td>
                    <td>{{$usuario->created_at}}</td>
                    <td>{{$usuario->updated_at}}</td>
                </tr>
            </tbody>
    </table>
        <a class="" href="{{url('usuario')}}">
            <button class="form-control btn btn-warning mt-5 mb-5">Voltar</button>
        </a>
</div>

@endsection
