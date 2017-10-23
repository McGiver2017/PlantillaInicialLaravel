@extends('layouts.administrador')
@section('css')
@include('assets.menu.css.app')
@endsection
@section('content')
<div class="container panel panel-default">
    <h1>Editar Producto</h1>
    @include('usuarios.form',['usuario'=>$usuario,'url'=>'/usuarios/'.$usuario->id,'method' => 'PATCH'])


</div>
@endsection
@section('js')
@include('assets.menu.js.app')
@endsection