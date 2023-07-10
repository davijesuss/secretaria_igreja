@extends('igreja.layouts.basico')

@section('titulo', 'Pesbiteros')
@section('conteudo')
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Igreja Gestão</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.home')}}">Cadastrar</a>
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
                        <th scope="col">CPF</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Dizimista</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($presbiteros as $presbitero)
                   @if($presbitero->cargo == 'Presbitero')
                    <tr>
                        <td>{{$presbitero->id}}</td>
                        <td>{{$presbitero->nome}}</td>
                        <td>{{$presbitero->cpf}}</td>
                        <td>{{$presbitero->cargo}}</td>
                        <td>{{$presbitero->dizimista}}</td>
                        <td></td>
                    </tr>
                   @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection