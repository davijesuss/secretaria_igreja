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
            <form action="{{ route('igreja.home-store')}}" method="post">
                @csrf
                <div class="form-group m-2">
                    <label for="exampleInputEmail1">NOME</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" placeholder="informe o nome">
                </div>
                <div class="form-group m-2">
                    <label for="exampleInputEmail1">CPF</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cpf" aria-describedby="emailHelp" placeholder="informe o cpf">
                </div>
                <div class="form-group m-2">
                    <label for="exampleFormControlSelect1">CARGO</label>
                    <select name="cargo" class="form-control" id="exampleFormControlSelect1">
                        <option value="Presbitero">Presbitero</option>
                        <option value="Copperador">Cooperador</option>
                    </select>
                </div>
                <div class="form-group m-2">
                    <label for="exampleFormControlSelect1">DIZIMISTA</label>
                    <select name="dizimista" class="form-control" id="exampleFormControlSelect1">
                     <option selected></option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>
                <div class="form-group m-2">
                    <label for="exampleFormControlSelect1">Setor</label>
                    <select name="id_setor" class="form-control" id="exampleFormControlSelect1">
                        <option selected>Selecione o setor</option>
                        @foreach($setores as $setor)
                        <option value="{{$setor->id}}">{{ $setor->nome_setor }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary m-2">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
@endsection