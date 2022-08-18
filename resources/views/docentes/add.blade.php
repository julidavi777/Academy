@extends('layouts.app')

@section('titulo', 'Añadido')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            El docente se  añadido con exito...
        </div>
        <a href="/docentes" class="m-5 btn btn-primary">Volver</a>
    </div>
@endsection
