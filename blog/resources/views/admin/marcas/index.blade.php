@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Marcas</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Marcas</a>                    
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">      
        @can('usuario_adicionar')      
            <a class="btn btncar" href="{{ route('admin.marcas.adicionar') }}">Adicionar <i class="material-icons right">add</i> </a>        
        @endcan
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>                        
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>                        
                        <td>                           
                        @can('usuario_editar')
                            <a class="btn btn1" href="{{ route('admin.marcas.editar',$registro->id) }}">Editar <i class="material-icons right">edit</i> </a>                                                        
                        @endcan                   
                        @can('usuario_deletar')
                            <a class="btn btn3" href="javascript: if(confirm('Deletar esse Registro?')){window.location.href = '{{ route('admin.marcas.deletar',$registro->id) }}'}">Deletar <i class="material-icons right">remove</i> </a>                           
                        @endcan                            
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection