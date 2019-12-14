@extends('layouts.app')

@section('content')

    <div class="container">
        <h5 class="center">Adicionar Usuários</h5>
        <div class="divider"></div>
        <br>
            <div class="row">
                <nav>
                    <div class="nav-wrapper path grey darken-4">
                        <div class="col s12">
                            <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                            <a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de Usuários</a>                    
                            <a class="breadcrumb">Adicionar Usuários</a>                    
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form action="{{ route('admin.usuarios.salvar') }}" method="post">
                    {{ csrf_field() }}  <!-- //Helper que cria token para dar segurança para o formulário -->
                    @include('admin.usuarios._form')

                    <button class="btn btn1">Adicionar <i class="material-icons right">add</i> </button>
                </form>
            </div>
    </div>

@endsection
