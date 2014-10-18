@extends('layout')

@section('content')

<div class="jumbotron">
    <h1>Demo Laravel</h1>
    <p class="lead">Ejemplo básico CRUD</p>
    <p><a class="btn btn-lg btn-success" href="{{{ URL::to('crud/show') }}}" role="button">Ver Crud</a></p>
</div>
    
@stop