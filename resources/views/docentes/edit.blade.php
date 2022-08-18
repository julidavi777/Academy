@extends('layouts.app')

@section('titulo', 'Editar Docente')

@section('contenido')
    <form action="/docentes/{{$docentico->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <br>
            <h2>Aquí puedes editar la información del docente</h2>
            <div class="form-group">
                <label for="nombres">Editar nombre del docente</label>
                <input id="nombres" class="form-control" type="text" name="nombres" value="{{$docentico->nombres}}">
            </div>
            <div class="form-group">
                <label for="apellidos">Editar los apellidos del docente</label>
                <input id="apellidos" class="form-control" type="text" name="apellidos" value="{{$docentico->apellidos}}">
            </div>
            <div class="form-group">
                <label for="titulo">Editar el titulo universitario</label>
                <input id="titulo" class="form-control" type="text" name="titulo" value="{{$docentico->titulo}}">
            </div>
            <div class="form-group">
                <label for="edad">Editar la edad</label>
                <input id="edad" class="form-control" type="text" name="edad" value="{{$docentico->edad}}">
            </div>
            <div class="form-group">
                <label for="fecha">Editar la fecha de contratación</label>
                <input id="fecha" class="form-control" type="date" name="fecha" value="{{$docentico->fecha}}">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue una nueva foto</label>
                <br>
                <img width="400" src="{{Storage::url($docentico->imagen)}}" alt="">
                <br>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <div class="form-group">
                <label for="documento">Cargue un nuevo documento</label>
                <br>
                <iframe width="400" src="{{Storage::url($docentico->documento)}}" alt=""></iframe>
                <br>
                <br>
                <input id="documento" type="file" name="documento">
            </div>
            <button class="btn btn-info" type="submit">Actualizar</button>
        </div>
    </form>
@endsection
