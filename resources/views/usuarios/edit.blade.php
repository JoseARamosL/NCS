@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
                        @csrf
                        @method('put')

                        <!--NAME-->
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="string"
                                class="form-control @error('nombre') is-invalid @enderror"
                                name="nombre" placeholder="{{$usuario->nombre}}" value="{{$usuario->nombre}}"
                                required autocomplete="nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--DNI-->
                        <div class="row mb-3">
                            <label for="NIF" class="col-md-4 col-form-label text-md-end">NIF</label>

                            <div class="col-md-6">
                                <input id="NIF" type="text" class="form-control" name="NIF"
                                    value="{{$usuario->NIF}}" placeholder="{{$usuario->NIF}}" required autocomplete="NIF" autofocus>

                                @error('NIF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!---DOMICILIO-->
                        <div class="row mb-3">
                            <label for="domicilio" class="col-md-4 col-form-label text-md-end">Domicilio</label>

                            <div class="col-md-6">
                                <input id="Domicilio" type="text" class="form-control" name="domicilio"
                                    value="{{$usuario->domicilio}}" placeholder="{{$usuario->domicilio}}" required autocomplete="domicilio" autofocus>
                            </div>
                        </div>

                        <!--POBLACION-->
                        <div class="row mb-3">
                            <label for="poblacion" class="col-md-4 col-form-label text-md-end">Poblacion</label>

                            <div class="col-md-6">
                                <input id="Poblacion" type="text" class="form-control" name="poblacion"
                                    value="{{$usuario->poblacion}}" placeholder="{{$usuario->poblacion}}" required autocomplete="poblacion" autofocus>
                            </div>
                        </div>

                        <!--Provincia-->
                        <div class="row mb-3">
                            <label for="provincia" class="col-md-4 col-form-label text-md-end">Provincia</label>

                            <div class="col-md-6">
                                <input id="provincia" type="text" class="form-control" name="provincia"
                                    value="{{$usuario->provincia}}" placeholder="{{$usuario->provincia}}" required autocomplete="provincia" autofocus>
                            </div>
                        </div>

                        <!--Pais-->
                        <div class="row mb-3">
                            <label for="pais" class="col-md-4 col-form-label text-md-end">País</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control" name="pais"
                                    value="{{$usuario->pais}}" placeholder="{{$usuario->pais}}" required autocomplete="provincia" autofocus>
                            </div>
                        </div>

                        <!--FECHADEALTA-->
                        <div class="row mb-3">
                            <label for="fecha_de_alta" class="col-md-4 col-form-label text-md-end">Fecha de Alta</label>

                            <div class="col-md-6">
                                <input id="fecha_de_alta" type="date" class="form-control" name="fecha_de_alta"
                                    value="{{$usuario->fecha_de_alta}}" placeholder="{{$usuario->fecha_de_alta}}" required autocomplete="fecha_de_alta" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="btnEditar" id="btnEditar" type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
