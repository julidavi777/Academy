@extends('layouts.app_2')

@section('title', 'Mostrar cursos')

@section('content')

    <div class="bg-light text-dark rounded mt-5 pt-5 mb-5 pb-5 text-center">
        <img src="{{ Storage::url($professor->imagen) }}" width="350" height="310" class="mb-5">
        <p class="card-text"> <b>Nombre(s):</b> {{$professor->name}} </p>
        <p class="card-text"> <b>Apellido(s):</b> {{$professor->last_name}} </p>
        <p class="card-text"> <b>Titulo Universitario:</b> {{$professor->college_degree}} </p>
        <p class="card-text"> <b>Edad:</b> {{$professor->age}} </p>
        <p class="card-text"> <b>Fecha Contrato:</b> {{$professor->contract_date}} </p>
        <p class="card-text"> <b>Documento de Identidad:</b> {{$professor->identify_document}} </p>

        <div class="text-center p-3">
            <a href="/courses/{{$professor->id}}/edit" class="btn btn-warning">Editar</a>
            <br>
            <br>
            {{-- Para este caso no se necesita escribir destroy en la ruta como sí escribimos
            edit en la ruta para obtener el formulario de edición. Aquí creamos un formulario
            simplemente para poder incluir el botón para eliminar --}}
            <form class="form-group" action="/courses/{{$professor->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

@endsection
