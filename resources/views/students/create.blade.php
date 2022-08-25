@extends('layouts.app_3')

@section('title', 'Agregar Estudiante')

@section('content')

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>
        <div class="text mx-5 mb-4">
            <p>Para registrarse en Drawing Academy debe ingresar información básica de identificación.
                Tenga en cuenta que los campos marcados con * son obligatorios para continuar el registro
            </p>
        </div>
        <hr>
        <div class="row">
                <div class="col-sm rounded">
                        <form action="/teachers" method="POST" class="mx-3 px-3 pb-3" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $alert)
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <li>{{$alert}}</li>
                                        </ul>
                                    </div>
                                @endforeach
                            @endif
                            <h5>Documenento de identidad</h5>
                            <br>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-6 col-form-label">Tipo de documento *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" class="document_type">
                                            <option>Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_number" class="col-sm-6 col-form-label">No. de documento *</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" id="document_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="identify_document" class="col-sm-6 col-form-label">Cargue Docum. Identificación *</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="hidden" id="identify_document" title="Examinar"/>
                                        {{-- <input type="button" class="btn btn-success" value="Examinar"> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-6 col-form-label">País de expedición *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" class="document_type">
                                            <option>Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-6 col-form-label">Depto donde fue expedido *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" class="document_type">
                                            <option>Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-6 col-form-label">Municipio donde fue expedido *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" class="document_type">
                                            <option>Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_number" class="col-sm-6 col-form-label">Fecha de expedición *</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" id="document_number">
                                    </div>
                                </div>
                        </form>
                </div>
                <div class="col-sm rounded">
                    <form action="/teachers" method="POST" class="mx-3 px-3 pb-3" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $alert)
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{$alert}}</li>
                                    </ul>
                                </div>
                            @endforeach
                        @endif
                        <h5>Datos de identificación</h5>
                        <br>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Nombres *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="document_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Primer apellido *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="document_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Segundo apellido *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="document_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Género *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="document_type">
                                        <option>Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="document_number" class="col-sm-6 col-form-label">Fecha de nacimiento *</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="document_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">País de nacimiento *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="document_type">
                                        <option>Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Departamento de nacimiento *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="document_type">
                                        <option>Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Municipio de nacimiento *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="document_type">
                                        <option>Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Estrato socioeconómico *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="document_type">
                                        <option>Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="buttons">
                                <input type="button" class="btn btn-secondary" value="Regresar">
                                <input type="button" class="btn btn-success" value="Guardar">
                            </div>

                    </form>
            </div>
        </div>
    </div>
    <br>

@endsection
