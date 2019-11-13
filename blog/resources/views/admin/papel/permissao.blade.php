
@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Permissões para <b>{{ $papel->nome }}</b></h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a href="{{ route('admin.papel') }}" class="breadcrumb">Lista de Papéis</a>                            
                        <a class="breadcrumb">Lista de Permissões</a>      
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <form action="{{route('admin.papel.permissao.salvar',$papel->id)}}" method="post">
            {{ csrf_field() }}
            <div class="input-field">
                <select name="permissao_id">
                    @foreach($permissao as $valor)
                    <option value="{{$valor->id}}">{{$valor->nome}}</option>
                    @endforeach
                </select>

            </div>
            <button class="btn btncar">Adicionar <i class="material-icons right">add</i> </button>
            </form>
            
        </div>
        <div class="row">
            <table>
                <thead>
                    <tr>                        
                        <th>Permissão</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($papel->permissoes as $value)
                    <tr>
                        <td>{{ $value->nome }}</td>
                        <td>{{ $value->descricao }}</td>                        
                        <td>                            
                            <a class="btn btn3" href="javascript: if(confirm('Remover essa Permissão?')){window.location.href = '{{ route('admin.papel.permissao.remover',[$papel->id, $value->id]) }}'}">Remover <i class="material-icons right">delete</i> </a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
        </div>
</div>
@endsection