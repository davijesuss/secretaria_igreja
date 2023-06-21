@extends('igreja.layouts.basico')

@section('titulo', 'Igreja Gestão')

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
            <form>
                <div class="form-group m-2">
                    <label for="exampleInputEmail1">NOME</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group m-2">
                    <label for="exampleInputEmail1">CPF</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group m-2">
                    <label for="exampleFormControlSelect1">CARGO</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option value="Presbitero">Presbitero</option>
                    <option value="Copperador">Cooperador</option>
                    </select>
                </div>
                <div class="form-group m-2">
                    <label for="exampleFormControlSelect1">DIZIMISTA</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary m-2">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
@endsection