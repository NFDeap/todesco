@extends('layouts.app')

@section('content')

    <div class="container">
        <h5 class="center">Adicionar Marca</h5>
        <div class="divider"></div>
        <br>
            <div class="row">
                <nav>
                    <div class="nav-wrapper path grey darken-4">
                        <div class="col s12">
                            <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                            <a href="{{ route('admin.marcas') }}" class="breadcrumb">Lista de Usuários</a>                    
                            <a class="breadcrumb">Adicionar Marca</a>                    
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form action="{{ route('admin.marcas.salvar') }}" method="post">
                    {{ csrf_field() }}  <!-- //Helper que cria token para dar segurança para o formulário -->
                    @include('admin.marcas._form')

                    <button class="btn btncar">Adicionar <i class="material-icons right">add</i> </button>
                </form>
            </div>
    </div>

@endsection
