@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Usuários</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Usuários</a>                    
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">      
        @can('usuario_adicionar')      
            <a class="btn btncar" href="{{ route('admin.usuarios.adicionar') }}">Adicionar <i class="material-icons right">add</i> </a>        
        @endcan
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>                           
                        @can('usuario_editar')
                            <a class="btn btn1" href="{{ route('admin.usuarios.editar',$usuario->id) }}">Editar <i class="material-icons right">edit</i> </a>                            
                            <a class="btn btn2" href="{{ route('admin.usuarios.papel',$usuario->id) }}">Papel <i class="material-icons right">person</i> </a>         
                        @endcan                   
                        @can('usuario_deletar')
                            <a class="btn btn3" href="javascript: if(confirm('Deletar esse Registro?')){window.location.href = '{{ route('admin.usuarios.deletar',$usuario->id) }}'}">Deletar <i class="material-icons right">delete</i> </a>                           
                        @endcan                            
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection