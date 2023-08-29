@extends('igreja.layouts.basico')

@section('titulo', 'Igreja Gestão')

@section('conteudo')
<div class="d-flex" id="wrapper">
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Igreja Gestão</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.home')}}">Cadastrar</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.presbiteros')}}">Presbitero</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.cooperadoes')}}">Cooperador</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('igreja.setores')}}">Setores</a>
    </div>
</div>
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <div class="container">
        <form action="{{ route('igreja.setores-update',['id' => $setores->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-group">

                        <input type="text" class="form-control" name="nome_setor" value="{{ $setores->nome_setor}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o setor">
                    </div>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection