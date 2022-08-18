@extends('layouts.app')

@section('titulo', 'Añadir Docente')

@section('contenido')
    <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>{{$alerta}}</li>
                    </ul>
                </div>
            @endforeach
        @endif
        <br>
            <h2>Aquí puedes añadir un nuevo docente</h2>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input id="nombres" class="form-control" type="text" name="nombres">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input id="apellidos" class="form-control" type="text" name="apellidos">
            </div>
            <div class="form-group">
                <label for="titulo">Titulo Universitario</label>
                <input id="titulo" class="form-control" type="text" name="titulo">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input id="edad" class="form-control" type="text" name="edad">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de contrato</label>
                <input id="fecha" class="form-control" type="date" name="fecha">
            </div>
            <div class="form-group">
                <label for="imagen">Foto</label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <div class="form-group">
                <label for="documento">Documento de identidad</label>
                <br>
                <input id="documento" type="file" name="documento">
            </div>
            <button class="btn btn-info" type="submit">Añadir Docente</button>
        </div>
    </form>
@endsection
