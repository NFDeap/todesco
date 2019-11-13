@extends('layouts.app')

@section('content')

    <div class="container">
        <h5 class="center">Adicionar Imagem</h5>
        <div class="divider"></div>
        <br>
            <div class="row">
                <nav>
                    <div class="nav-wrapper path grey darken-4">
                        <div class="col s12">
                            <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                            <a href="{{ route('admin.carros') }}" class="breadcrumb">Lista de Carros</a>
                            <a href="{{ route('admin.galerias',$carro->id) }}" class="breadcrumb">Galeria de Imagens</a>
                            <a class="breadcrumb">Adicionar Imagem</a>                    
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form action="{{ route('admin.galerias.salvar',$carro->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}  <!-- //Helper que cria token para dar segurança para o formulário -->
                    <div class="container-fluid">
                    @include('admin.galerias._form')                    
                    <button class="btn btncar">Adicionar <i class="material-icons right">add</i> </button>
                    </div>
                    
                </form>                
            </div>
    </div>

@endsection
