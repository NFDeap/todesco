@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="center">Lista de Carros</h5>
    <div class="divider"></div>
    <br>

        <div class="row">
            <nav>
                <div class="nav-wrapper path grey darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Carros</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <a class="btn btn1" href="{{ route('admin.carros.adicionar') }}">Adicionar <i class="material-icons right">add</i></a>
        </div>
        <!-- <div class="container"> -->
        <div class="row">
            <div class="col s12">
            <table id="tabelaCarros" class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>                    
                        <th>Preço</th>
                        <th>Marca</th>                        
                        <th>Imagem</th>               
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody class="dataTable">
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td><p class="word-wrap">{{ $registro->titulo }}</p></td>
                        <td>R$ {{ number_format($registro->preco,2,",",".") }}</td>
                        <td>{{ $registro->marca->titulo }}</td>                          
                        <td><div class="thumbnail admPost"><img src="{{ asset($registro->imagem) }}"></div></td> <!-- width="73" height="150" -->
                        <td>{{ $registro->publicar }}</td>
                        <td>                 
                            <ul>
                                <li><a class="btn btn1" href="{{ route('admin.galerias',$registro->id) }}">Galeria </a></li>                                <!-- <i class="material-icons right">image</i> -->
                                <li><a class="btn btn1" href="{{ route('admin.carros.editar',$registro->id) }}">&nbspEditar&nbsp </a></li>                                <!-- <i class="material-icons right">edit</i> -->
                                <li><a class="btn btn1" href="javascript: if(confirm('Deletar esse Registro?')){window.location.href = '{{ route('admin.carros.deletar',$registro->id) }}'}">Deletar</a></li>    <!-- <i class="material-icons right">remove</i>  -->
                            </ul> 
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>          
            </div>
        </div>       
        <!-- </div> -->

        
        <div class="container-fluid">
        <div class="row center-align">  

           <script>
        jQuery(document).ready(function($) {
                $(document).ready(function() {
                    $('#tabelaCarros').DataTable({
                        /* "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]], */
                        /* "bJQueryUI": true, */
                        "oLanguage": {
                                "sProcessing":   "Processando...",                                                      
                                "sZeroRecords":  "Não foram encontrados resultados",
                                "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                                "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                                "sInfoFiltered": "Mostrar _MAX_ Entradas",
                                "sInfoPostFix":  "",
                                "sSearch":       "Buscar:",
                                "sUrl":          "",
                                "oPaginate": {
                                    "sFirst":    "Primeiro",
                                    "sPrevious": "Anterior",
                                    "sNext":     "Seguinte",
                                    "sLast":     "Último"                                
                                },
                                "sLengthMenu": 'Mostrar <select>'+
                                '<option value="10">10</option>'+
                                '<option value="20">20</option>'+
                                '<option value="30">30</option>'+
                                '<option value="40">40</option>'+
                                '<option value="50">50</option>'+
                                '<option value="-1">Todos</option>'+
                                '</select> Registros'
                            }                            
                        })                                                                                               
                    });
                }); 
            </script>
        </div>
        </div>
        
</div>
@endsection

