@extends('layouts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
            <h2>Docente</h2>
            <p class="card-text">Nombres: {{$docentico->nombres}}</p>
            <p class="card-text">Apellidos: {{$docentico->apellidos}}</p>
            <p class="card-text">Titulo Universitario: {{$docentico->titulo}}</p>
            <p class="card-text">Edad: {{$docentico->edad}}</p>
            <p class="card-text">Fecha de contratación: {{$docentico->fecha}}</p>
            <img width="400" src="{{Storage::url($docentico->imagen)}}" alt="">
            <br>
            <br>
            <iframe width="400" height="400" src="{{Storage::url($docentico->documento)}}"></iframe>
        </div>
        <br>
        <a href="/docentes/{{$docentico->id}}/edit" class="btn btn-success">Editar Docente</a>
        <br>
        <br>
        {{--Creacion de campo Eliminar en la vista. Por medio del metodo DELETE,
            ademas de la ruta que debe retornar--}}
        <form class="form-group" action="/docentes/{{$docentico->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Docente</button>
        </form>


    </div>

@endsection
