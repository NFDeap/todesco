@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Galeria de Imagens</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a href="{{ route('admin.carros') }}" class="breadcrumb">Lista de Carros</a>
                        <a class="breadcrumb">Galeria de Imagens</a>
                    </div>
                </div>
            </nav>
        </div>

        
        <div class="row">
            <a class="btn btn1" href="{{ route('admin.galerias.adicionar',$carro->id) }}">Adicionar <i class="material-icons right">add</i> </a>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>                        
                        <th>Título</th>                    
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Ordem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td><div class="thumbnail"><img src="{{ asset($registro->imagem) }}"></div></td>
                        <td>{{ $registro->ordem }}</td>   
                        <td>
                            <a class="btn btn1" href="{{ route('admin.galerias.editar',$registro->id) }}">Editar</a>     <!-- <i class="material-icons right">edit</i>  -->
                            <a class="btn btn1" href="javascript: if(confirm('Deletar esse Registro?')){window.location.href = '{{ route('admin.galerias.deletar',$registro->id) }}'}">Deletar</a>   <!-- <i class="material-icons right">delete</i>  -->
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection