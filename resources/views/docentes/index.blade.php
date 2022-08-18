@extends('layouts.app')

@section('titulo', 'Nuestros Docentes')

@section('contenido')
    <h2 class="ml-3">Docentes</h2>
    <div class="row">
        @foreach ($docentico as $item)
                <div class="m-3 col-sm">
                    <div class="card" style="width: 18rem; height:360px">
                        <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->imagen)}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->nombres}} {{$item->apellidos}}</h4>
                            <p class="card-text">Titulo Universitario: {{$item->titulo}}</p>
                            <a href="/docentes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>
    <a href="/docentes/create" class="m-3 btn btn-success">Añadir docente nuevo</a>
@endsection
