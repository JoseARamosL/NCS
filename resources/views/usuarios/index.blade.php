@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header div__space">
                    Lista de usuarios
                    <form action="{{route('usuarios.create')}}" method="GET">
                        @csrf
                        <button class="btn__div">Crear Usuario</button>
                    </form>
                </div>

                <div class="card-body table-responsive">
                    <ul class="list-group">
                        <table class="table table-striped table-bordered table1">
                            <thead>
                                <tr>
                                    <td>Código Cliente</td>
                                    <td>Nombre</td>
                                    <td>NIF</td>
                                    <td>Domicilio</td>
                                    <td>Población</td>
                                    <td>Código Postal</td>
                                    <td>Provincia</td>
                                    <td>País</td>
                                    <td>Fecha de Alta</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->nombre }}</td>
                                        <td>{{ $usuario->NIF }}</td>
                                        <td>{{ $usuario->domicilio }}</td>
                                        <td>{{ $usuario->poblacion }}</td>
                                        <td>{{ $usuario->codigo_postal }}</td>
                                        <td>{{ $usuario->provincia }}</td>
                                        <td>{{ $usuario->pais }}</td>
                                        <td>{{ $usuario->fecha_de_alta}}</td>
                                        <td>
                                            <form action="{{route('usuarios.destroy', $usuario)}}" method="POST" class="inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-secondary btn1" type="submit">Eliminar</button>
                                            </form>
                                            <form action="{{route('usuarios.edit', $usuario)}}" method="GET" class="inline">
                                                @csrf
                                                <button class="btn btn-secondary btn2" type="submit">Editar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .btn__div {
        background-color: lightblue;
        border-radius: 10px;
    }
    .div__space {
        display: flex;
        justify-content: space-between;
    }
    .inline {
        display: inline;
    }

    .btn1 {
        background-color: green;
        margin-bottom: 10px;
    }

    .btn2 {
        background-color: red;
    }
</style>
@endsection
