<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Estoy en el metodo index';
        $docentico = Docente::all();
        return view('docentes.index', compact('docentico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        //return $request->input('titulo');
        //return $request->all();
        $docentico = new Docente();
        $docentico->nombres = $request->input('nombres');
        $docentico->apellidos = $request->input('apellidos');
        $docentico->titulo = $request->input('titulo');
        $docentico->edad = $request->input('edad');
        $docentico->fecha = $request->input('fecha');
        if($request->hasFile('imagen')){
            $docentico->imagen = $request->file('imagen')->store('public/docentes/imagenes');
        }
        if($request->hasFile('documento')){
            $docentico->documento = $request->file('documento')->store('public/docentes/documentos');
        }
        $docentico->save();
        return view('docentes.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentico = Docente::find($id);
        return view('docentes.show', compact('docentico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentico = Docente::find($id);
        return view('docentes.edit', compact('docentico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docentico = Docente::find($id);
        $docentico->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $docentico->imagen = $request->file('imagen')->store('public/docentes');
        }
        $docentico->fill($request->except('documento'));
        if($request->hasFile('documento')){
            $docentico->documento = $request->file('documento')->store('public/docentes/documentos');
        }
        $docentico->save();
        return view('docentes.upload');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentico = Docente::find($id);
        $urlImagenBD = $docentico->imagen;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $docentico -> delete();
        return view('docentes.delete');
    }
}
