<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeStudentRequest;
use App\Models\Country;
use App\Models\Department;
use App\Models\Municipality;
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
        $countries = Country::all();
        $departments = Department::all();
        $municipalities = Municipality::all();
        return view('students.create', compact('countries', 'departments', 'municipalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeStudentRequest $request)
    {
        $apprentice = new Student();
        $apprentice->document_type = $request->input('document_type');
        $apprentice->document_number = $request->input('document_number');
        if($request->hasFile('identify_document')){
            $apprentice->identify_document = $request->file('identify_document')->store('public/students/identify_document');
        }
        $apprentice->expedition_date = $request->input('expedition_date');
        $apprentice->id_exped_muni = $request->input('id_exped_muni');
        $apprentice->exped_dept = $request->input('exped_dept');
        $apprentice->exped_land = $request->input('exped_land');
        $apprentice->name = $request->input('names');
        $apprentice->first_last_name = $request->input('last_name1');
        $apprentice->second_last_name = $request->input('last_name2');
        $apprentice->gender = $request->input('gender');
        $apprentice->birth_date = $request->input('birth_date');
        $apprentice->birth_country = $request->input('id_birth_country');
        $apprentice->birth_department = $request->select('id_birth_department');
        $apprentice->birth_municipality = $request->input('id_birth_municipality');
        $apprentice->stratum = $request->input('stratum');
        $apprentice->save();
        return view('students.add_student');
        // return $request;
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
    public function update(storeStudentRequest $request, $id)
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
