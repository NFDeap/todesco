@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Papeis</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>                        
                        <a class="breadcrumb">Lista de Papeis</a>
                    </div>
                </div>
            </nav>
        </div>

        
        <div class="row">
            <a class="btn btncar" href="{{ route('admin.papel.adicionar') }}">Adicionar <i class="material-icons right">add</i> </a>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>                        
                        <th>Nome</th>                    
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->descricao }}</td>                                            
                        <td>
                            @if($registro->nome != 'admin')
                            <a class="btn btn1" href="{{ route('admin.papel.editar',$registro->id) }}">Editar <i class="material-icons right">edit</i> </a>
                            <a class="btn btn2" href="{{ route('admin.papel.permissao',$registro->id) }}">Permissão <i class="material-icons right">person</i> </a>
                            @else
                            <a class="btn disabled">Editar</a>
                            <a class="btn disabled">Permissão</a>
                            @endif

                            

                            @if($registro->nome != 'admin')
                            <a class="btn btn3" href="javascript: if(confirm('Deletar esse Registro?')){window.location.href = '{{ route('admin.papel.deletar',$registro->id) }}'}">Deletar <i class="material-icons right">delete</i></a>                            
                            @else
                            <a class="btn disabled">Deletar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection