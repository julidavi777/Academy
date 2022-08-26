@extends('layouts.app_3')

@section('title', 'Lista Docentes')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado de Estudiantes</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">

        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando acutalmente --}}

            <div class="col-sm ">
                <table class=" table-dark table-striped m-auto">
                    <thead>
                        <tr>

                            <td class="p-2">Nombres</td>
                            <td class="p-2">Apellidos</td>
                            <td class="p-2">Genero</td>
                            <td class="p-2">Tipo documento</td>
                            <td class="p-2">N° documento</td>
                            <td class="p-2">Municipio</td>
                            <td class="p-2">Acciones</td>


                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                             {{-- @foreach ($students as $student) --}}


                            {{-- @foreach ( $apprentice as $student ) --}}
                             <td class="p-2">maria </td>
                            <td class="p-2">fernanda</td>
                            <td class="p-2">m</td>
                            <td class="p-2">cc</td>
                            <td class="p-2">1088312276</td>
                            <td class="p-2">26/04/1994</td>
                            <td class="p-2"> <a href="localhost:8000/students/{{student->id}}"><button class="btn btn-primary">Ver</button></a>
                                <button class="btn btn-secondary">editar</button>
                                <button class="btn btn-danger">eliminar</button></td>
{{--
                            <td class="p-2">maria {{$student->names}}</td>
                            <td class="p-2">fernanda{{$student->last_name1}}</td>
                            <td class="p-2">m{{$student->gender}}</td>
                            <td class="p-2">cc{{$student->document_type}}</td>
                            <td class="p-2">1088312276{{$student->document_number}}</td>
                            <td class="p-2">26/04/1994{{$student->municipalitiesBirth}}</td> --}}
                        </tr>
                         {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>

    </div>

@endsection
