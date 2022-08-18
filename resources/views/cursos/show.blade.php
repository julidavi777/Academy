@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
    <div class="text-center">
        <div class="m-auto">
            <img width="300" src="{{Storage::url($cursito->imagen)}}" alt="">
            <p class="card-text">Descripción: {{$cursito->descripcion}}</p>
            <p class="card-text">Duración: {{$cursito->duracion}} horas</p>
            <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Editar</a>
        </div>
        <br>
        <br>
        {{--Creacion de campo Eliminar en la vista. Por medio del metodo DELETE,
            ademas de la ruta que debe retornar--}}
        <form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

@endsection
