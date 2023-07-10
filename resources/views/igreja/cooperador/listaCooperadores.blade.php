@extends('igreja.layouts.basico')

@section('titulo', 'Setores')
@section('conteudo')
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Igreja Gestão</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.home') }}">Cadastrar</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.presbiteros')}}">Presbitero</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.cooperadoes')}}">Cooperador</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.setores')}}">Setores</a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Setor</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Dizimista</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cooperadores as $cooperador)
                    @if($cooperador->cargo == 'Cooperador')
                    <tr>
                        <td>{{$cooperador->id}}</td>
                        <td>{{$cooperador->nome}}</td>
                        <td>{{$cooperador->setor->nome_setor}}</td>
                        <td>{{$cooperador->cpf}}</td>
                        <td>{{$cooperador->cargo}}</td>
                        <td>{{$cooperador->dizimista}}</td>
                        <td class="d-flex">
                            <a href="{{ route('igreja.cooperadoes.edit', ['id' => $cooperador->id]) }}" class="btn btn-primary me-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('igreja.cooperadoes.destroy',  ['id' => $cooperador->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i></a>
                                </button>
                            </form>
                        </td>
                    </tr>
                   @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection