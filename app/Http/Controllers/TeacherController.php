<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professor = Teacher::all() ;//Traemos toda la info de la tabla teachers a trabes del modelo y el método all()
        return view('teachers.index', compact('professor'));//Se adjunta teacher a la vista para poderlo usar, usando compact
        // return $professor;
        // return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeTeacherRequest $request)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
        }

        // return $request->all();
        $professor = new Teacher();
        $professor->name = request('name');
        $professor->last_name = request('last_name');
        $professor->college_degree = request('college_degree');
        $professor->age = request('age');
        $professor->contract_date = request('contract_date');
        if($request->hasFile('imagen')){
            $professor->imagen = $request->file('imagen')->store('public/teachers');
        }
        if($request->hasFile('identify_document')){
            $professor->imagen = $request->file('imagen')->store('public/identify_document');
        }
        $professor->save();//Comando para registrar la info en la bd
        // return 'El docente se ha agregado exitosamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Teacher::find($id);
        return view('teachers.show', compact('professor'));
        // return 'El id de este curso es: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Teacher::find($id);
        // return 'El id de este curso es: ' . $id;
        // return 'La iformación que ud quiere actualizar, se vería en formato array...' . $professor;
        return view('teachers.edit', compact('professor'));
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
        $professor = Teacher::find($id);
        // return $professor;
        $professor->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $professor->imagen = $request->file('imagen')->store('public/courses');
        }
        $professor->save();
        // return $request;
        return 'La información del docente se ha actualizado exitosamente';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Teacher::find($id);
        // return $professor;
        $urlImagenBD = $professor->imagen;
        // return $urlImagenBD;
        $imageName = str_replace('public/', '\storage\\', $urlImagenBD);
        $fullRoute = public_path() . $imageName;
        unlink($fullRoute);
        $professor->delete();
        return 'El curso se ha eliminado exitosamente';
        // return $fullRoute;
    }
}
