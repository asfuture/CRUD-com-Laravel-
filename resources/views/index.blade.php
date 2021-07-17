@extends('templates.main')

<!--Alterar titulo-->
@section('title', 'Pagina Inicial')

@section('content')

<div class="container-fluid bg-dark text-light">
    <h1 class="text-center mb-5 ">Cadastro de Usuário</h1>
</div>

<div class="text-center mt-3 mb-4">
    <!--Link para pagina cadastrar-->
    <a href="{{url('usuario/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-11 m-auto">
    <!--Token de seguranção do laravel-->
    @csrf
    <table class="table " id="id_tabela_usuario">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Passowrd</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach($usuario as $usuarios)
            <tr>
                <th scope="row">{{$usuarios->id}}</th>
                <td>{{$usuarios->username}}</td>
                <td>{{$usuarios->name}}</td>
                <td> <input type="password" value="{{$usuarios->password}}" readonly></td>
                <td>

                <a href="{{url("usuario/show/$usuarios->id")}}">
                <button class="btn btn-primary">Visualizar</button>
                </a>

                <a href="{{url("usuario/edit/$usuarios->id")}}"><button class="btn btn-success">Editar</button>
                </a>

                <a href="{{url("usuario/delete/$usuarios->id")}}" class="js-del"><button class="btn btn-danger">Deletar</button>
                </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
