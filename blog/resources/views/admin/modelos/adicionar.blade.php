@extends('layouts.app')

@section('content')

    <div class="container">
        <h5 class="center">Adicionar Modelo</h5>
        <div class="divider"></div>
        <br>
            <div class="row">
                <nav>
                    <div class="nav-wrapper path grey darken-4">
                        <div class="col s12">
                            <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                            <a href="{{ route('admin.modelos') }}" class="breadcrumb">Lista de Modelos</a>                    
                            <a class="breadcrumb">Adicionar Modelo</a>                    
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form action="{{ route('admin.modelos.salvar') }}" method="post">
                    {{ csrf_field() }}  <!-- //Helper que cria token para dar segurança para o formulário -->
                    @include('admin.modelos._form')

                    <button class="btn btncar">Adicionar <i class="material-icons right">add</i> </button>
                </form>
            </div>
    </div>

@endsection
