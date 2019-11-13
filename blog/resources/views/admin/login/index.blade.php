@extends('layouts.app')

@section('content')

<div class="container">
    <h5>Entar</h5>
    <form action="{{ route('admin.login') }}" method="POST">
        {{ csrf_field() }} <!-- Token  de validação dos usuários -->
        @include('admin.login._form')
        
        <button class="btn btn1">Entrar</button>

    </form>
</div>

@endsection