<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprentice = Student::all();
        return view('students.index', compact('apprentice'));
        // return $apprentice;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request->hasFile('identify_document')){
        //     $file = $request->file('identify_document');
        // }
        // return $request->all();
        $apprentice = new Student();
        $apprentice->document_type = $request->input('document_type');
        $apprentice->document_number = $request->input('document_number');
        if($request->hasFile('identify_document')){
            $apprentice->identify_document = $request->file('identify_document')->store('public/students/identify_document');
        }
        $apprentice->document_issuing_country = $request->input('document_issuing_country');
        $apprentice->issuing_department = $request->input('issuing_department');
        $apprentice->issuing_municipality = $request->input('issuing_municipality');
        $apprentice->expedition_date = $request->input('expedition_date');
        $apprentice->name = $request->input('name');
        $apprentice->first_last_name = $request->input('first_last_name');
        $apprentice->second_last_name = $request->input('second_last_name');
        $apprentice->gender = $request->input('gender');
        $apprentice->birth_date = $request->input('birth_date');
        $apprentice->birth_country = $request->input('birth_country');
        $apprentice->birth_department = $request->input('birth_department');
        $apprentice->birth_municipality = $request->input('birth_municipality');
        $apprentice->stratum = $request->input('stratum');
        $apprentice->save();
        return view('students.add_student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apprentice = Student::find($id);
        return view('students.show', compact('apprentice'));
        // return 'El id del estudiante es: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apprentice = Student::find($id);
        // return 'El id del estudiante es: ' . $id;
        // return 'La información que ud quiere actualizar, se vería en formato array...' . $apprentice;
        return view('students.edit', compact('apprentice'));
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
        $apprentice = Student::find($id);
        // return $apprentice;
        $apprentice->fill($request->except('identify_document'));
        if($request->hasFile('identify_document')){
            $apprentice->identify_document = $request->file('identify_document')->store('public/students/identify_document');
        }
        $apprentice->save();
        return view('students.edit_student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apprentice = Student::find($id);
        $urlDocument = $apprentice->identify_document;
        $documentName = str_replace('public/', '\storage\\', $urlDocument);
        $fullRoute = public_path() . $documentName;
        unlink($fullRoute);
        $apprentice->delete();
        return view('students.del_student');
    }
}
