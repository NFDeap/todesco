@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Páginas</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Páginas</a>                    
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($paginas as $pagina)
                    <tr>
                        <td>{{ $pagina->id }}</td>
                        <td><p>{{ $pagina->titulo }}</p></td>
                        <td><p>{{ $pagina->descricao }}</p></td>
                        <td>{{ $pagina->tipo }}</td>
                        <td>
                            <a class="btn btn1" href="{{ route('admin.paginas.editar',$pagina->id) }}">Editar <i class="material-icons">edit</i> </a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection