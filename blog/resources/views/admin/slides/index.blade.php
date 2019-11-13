@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Slides</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>                        
                        <a class="breadcrumb">Lista de Slides</a>
                    </div>
                </div>
            </nav>
        </div>

        
        <div class="row">
            <a class="btn btncar" href="{{ route('admin.slides.adicionar') }}">Adicionar <i class="material-icons right">add</i></a>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Ordem</th>                        
                        <th>Título</th>                    
                        <th>Descrição</th>                        
                        <th>Imagem</th>   
                        <th>Publicado</th>                     
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->ordem }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td><div class="thumbnail"><img src="{{ asset($registro->imagem) }}"></div></td>
                        <td>{{ $registro->publicado }}</td>                        
                        <td>
                            <a class="btn btn1" href="{{ route('admin.slides.editar',$registro->id) }}">Editar <i class="material-icons right">edit</i></a>
                            <a class="btn btn3" href="javascript: if(confirm('Deletar esse Registro?')){window.location.href = '{{ route('admin.slides.deletar',$registro->id) }}'}">Deletar <i class="material-icons right">delete</i> </a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection