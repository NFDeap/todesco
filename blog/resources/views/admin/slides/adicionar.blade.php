@extends('layouts.app')

@section('content')

    <div class="container">
        <h5 class="center">Adicionar Slides</h5>
        <div class="divider"></div>
        <br>
            <div class="row">
                <nav>
                    <div class="nav-wrapper path grey darken-4">
                        <div class="col s12">
                            <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                            <a href="{{ route('admin.slides') }}" class="breadcrumb">Lista de Slides</a>                    
                            <a class="breadcrumb">Adicionar Slides</a>                    
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <form action="{{ route('admin.slides.salvar') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}  <!-- //Helper que cria token para dar segurança para o formulário -->
                    <div class="container-fluid">
                    @include('admin.slides._form')                    
                    <button class="btn btn1">Adicionar <i class="material-icons right">add</i> </button>
                    </div>
                    
                </form>                
            </div>
    </div>

@endsection
