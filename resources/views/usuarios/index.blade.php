@extends('layouts.administrador')
@section('css')
@include('assets.menu.css.app')
@endsection
@section('content')
<section>
    <div class="big-padding text-center blue-grey white-text" role="alert">
        <h1>Productos</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Apellidos</td>
                            <td>Nombre</td>
                            <td>DNI</td>
                            <td>Telefono</td>
                            <td>Operaciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->apellidos }}</td>
                            <td>{{ $item->nombres }}</td>
                            <td>{{ $item->dni }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>
                                <a href="{{url('usuarios/'.$item->id)}}">Ver</a>
                                <a href="{{url('usuarios/'.$item->id.'/edit')}}">Editar</a>
                                @include('usuarios.delete',['item'=>$item])</td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>


    </div>
</div>

</section>
<div class="floating"> 
    <a href="{{url('/usuarios/create')}}" class="btn btn-success btn-fab">
        <i class="material-icons">add</i>
    </a>
</div>
@endsection
@section('js')
@include('assets.menu.js.app')
@endsection