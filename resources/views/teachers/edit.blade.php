@extends('layouts.app_2')

@section('title', 'Editar curso')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/teachers/{{$professor->id}}" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                        <h2 class="text-center mt-5">Editar Información del Docente</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre(s):</b></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$professor->name}}">
                        </div>
                        <div class="form-group">
                            <label for="last_name"><b>Apellido(s):</b></label>
                            <input id="last_name" class="form-control" type="text" name="last_name" value="{{$professor->last_name}}">
                        </div>
                        <div class="form-group">
                            <label for="college_degree"><b>Título Universitario:</b></label>
                            <input id="college_degree" class="form-control" type="text" name="college_degree" value="{{$professor->college_degree}}">
                        </div>
                        <div class="form-group">
                            <label for="age"><b>Edad:</b></label>
                            <input id="age" class="form-control" type="text" name="age" value="{{$professor->age}}">
                        </div>
                        <div class="form-group">
                            <label for="contract_date"><b>Fecha Contrato:</b></label>
                            <input id="contract_date" class="form-control" type="date" name="contract_date" value="{{$professor->contract_date}}">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue la foto del docente:</b></label>
                            <br>
                            <label for="imagen"> <img src="{{ Storage::url($professor->imagen) }}" width="50" height="50" alt=""></label>
                            <input id="imagen" class="" type="file" name="imagen">
                        </div>
                        <div class="form-group">
                            <label for="identify_document"><b>Cargue el documento de Identidad:</b></label>
                            <br>
                            {{-- <label for="identify_document"> <img src="{{ Storage::url($professor->idetify_document) }}" width="50" height="50" alt=""></label> --}}
                            <input id="identify_document" class="" type="file" name="identify_document">
                        </div>
                        <br>
                        <div class="button text-center">
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                        <div class="form-group">
                            <label for="name"><b>Nombre del curso:</b></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$grade->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Descripción:</b></label>
                            <input id="description" class="form-control" type="text" name="description" value="{{$grade->description}}">
                        </div>
                        <div class="form-group">
                            <label for="duration"><b>Duración (horas):</b></label>
                            <input id="duration" class="form-control" type="text" name="duration" value="{{$grade->duration}}">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue la imagen del curso:</b></label>
                            <br>
                            <label for="description"> <img src="{{ Storage::url($grade->imagen) }}" width="50" height="50" alt=""></label>
                            <input id="imagen" class="" type="file" name="imagen">
                        </div>
                        <br>
                        <div class="button text-center">
                            <button class="btn btn-success" href="" type="submit">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

@endsection
