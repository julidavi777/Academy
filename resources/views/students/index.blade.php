@extends('layouts.app_3')

@section('title', 'Lista Docentes')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado de Estudiantes</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">
        @foreach ( $apprentice as $student )
        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando acutalmente --}}

            <div class="col-sm">
                
            </div>

        @endforeach
    </div>

@endsection
