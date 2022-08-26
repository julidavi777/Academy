@extends('layouts.app')

@section('title', 'Mostrar cursos')

@section('content')

    <h1 class="text-center mt-5 ">Informacion de estudiante</h1>

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>

        <hr>
        <div class="row">
                <div class="col-sm-4 mx-5 pb-3 rounded">
                        <form action="/students" method="POST" class="" enctype="multipart/form-data">
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
                            <h5>Documento de identidad</h5>
                            <br>

                                <div class="form-group row">
                                    <b> Tipo de documento:</b>
                                    <div class="col-sm-6">
                                        {{-- <span>{{$student->document_type}}</span> --}}
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>No. de documento </b>
                                    <div class="col-sm-6">
                                        <span>{{$student->document_number}}</span>
                                        <span class="eliminarplus">30318271</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Documento pdf </b>
                                    <div class="col-sm-6">
                                        <span></span>
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>País de expedición </b>
                                    <div class="col-sm-6">
                                        <span></span>
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Depto. donde fue expedido </b>
                                    <div class="col-sm-6">
                                        <span></span>
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Municipio donde fue expedido </b>
                                    <div class="col-sm-6">
                                        <span></span>
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                        <option>Seleccionar</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Fecha de expedición </b>
                                    <div class="col-sm-6">
                                        <span >
                                            <span class="eliminarplus">Cedula de Ciudadanía</span>

                                        </div>
                                </div>
                </div>
                <div class="col-sm ms-5 me-5 pb-3 rounded">
                </div>
                <div class="col-sm-4 mx-5 px-1 pb-3 rounded">
                        <h5>Datos de identificación</h5>
                        <br>
                            <div class="form-group row">
                                <b>Nombres </b>
                                <div class="col-sm-6">
                                    <span ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Primer apellido </b>
                                <div class="col-sm-6">
                                    <span ">
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                    </div>
                            </div>
                            <div class="form-group row">
                                <b>Segundo apellid</b>
                                <div class="col-sm-6">
                                    <span >
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                    </div>
                            </div>
                            <div class="form-group row">
                                <b>Género </b>
                                <div class="col-sm-6">
                                    <spanvalue="M">M</option>
                                    <span class="eliminarplus">Cedula de Ciudadanía</span>

                                    <option value="F">F</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Fecha de nacimiento </b>
                                <div class="col-sm-6">
                                    <span ">
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                    </div>
                            </div>
                            <div class="form-group row">
                                <b>País de nacimiento </b>
                                <div class="col-sm-6">
                                    <span>
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                        <option>Seleccionar</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Departamento de nacimiento </b>
                                <div class="col-sm-6">
                                    <span>
                                        <option>Seleccionar</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Municipio de nacimiento </b>
                                <div class="col-sm-6">
                                    <span>
                                        <option>Seleccionar</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Estrato socioeconómico </b>
                                <div class="col-sm-6">
                                    <span>
                                        <span class="eliminarplus">Cedula de Ciudadanía</span>

                                </div>
                            </div>

                            <div class="buttons">
                                <span div>

                                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
