@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Contatos</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Contatos</a>                    
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Telefone</th>
                        <th>WhatsApp</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->telefone }}</td>
                        <td>{{ $registro->whatsapp }}</td>
                        <td>                                                   
                            <a class="btn btn1" href="{{ route('admin.contatos.editar',$registro->id) }}">Editar</a>    <!-- <i class="material-icons right">edit</i> -->                            
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>

</div>
@endsection