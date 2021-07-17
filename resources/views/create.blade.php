@extends('templates.main')

<!--Alterar titulo-->
@section('title','Cadastrar - Usuários')

@section('content')


    <div class="container-fluid bg-dark text-light">
        <!--If para alterar o titutlo do form cadastrar e editar-->
        <h1 class="text-center">@if(isset($usuario))Editar Cadastro do Usuário: {{$usuario->name}} @else Cadastrar Usuário @endif</h1>
    </div>

    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">

                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach

            </div>
        @endif

    <!--If para pode utulizar o mesmo form para cadastra e editar-->
    @if(isset($usuario))
        <form class="mb-5" name="formEdit" id="formEdit" method="post" action="{{url('/usuario/update/$usuario->id')}}">
            @method('PUT')
        @else
        <form class="mb-5" name="formCard" id="formCard" method="post" action="{{url('/usuario/create')}}">
     @endif

        <!--Token de seguranção da laravel-->
            @csrf

            <input class="form-control" type="hidden" id="id" name="id" value="{{ $usuario->id ?? ''}}"><br>

            <input class="form-control" type="text" id="username" name="username" placeholder="Digite o seu Sobrenome." value="{{ $usuario->username ?? ''}}" required><br>

            <input class="form-control" type="text" id="name" name="name" placeholder="Digite o seu nome" value="{{ $usuario->name ?? ''}}"required><br>

            <input class="form-control" type="password" id="password"  name="password" placeholder="Digite sua senha apenas numéro." value="{{ $usuario->password ?? ''}}" maxlength="4" required><br>
            <input class="form-control btn btn-primary" type="submit" value="@if(isset($usuario))Editar @else Cadastrar @endif" >

        </form>

        <a class="" href="{{url('usuario')}}">
            <button class="form-control btn btn-warning mt-5 mb-5">Voltar</button>
        </a>
    </div>

@endsection
