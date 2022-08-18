@extends('layouts.app')

@section('titulo', 'Eliminado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-danger" role="alert">
            El docente ha sido eliminado...
        </div>
        <a href="/docentes" class="m-5 btn btn-primary">Volver</a>
    </div>
@endsection
