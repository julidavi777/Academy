<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeStudentRequest;
use App\Models\Country;
use App\Models\Course;
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
        $courses = Course::all();
        $countries = Country::all();
        $departments = Department::all();
        $municipalities = Municipality::all();
        return view('students.create', compact('courses', 'countries', 'departments', 'municipalities'));
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
        $apprentice->id_exped_muni = $request->input('id_exped_muni');
        $apprentice->expedition_date = $request->input('expedition_date');
        $apprentice->names = $request->input('names');
        $apprentice->last_name1 = $request->input('last_name1');
        $apprentice->last_name2 = $request->input('last_name2');
        $apprentice->gender = $request->input('gender');
        $apprentice->birth_date = $request->input('birth_date');
        $apprentice->id_birth_muni = $request->input('id_birth_muni');
        $apprentice->stratum = $request->input('stratum');
        $apprentice->id_course = $request->input('id_course');
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
        $courses = Course::all();
        $countries = Country::all();
        $departments = Department::all();
        $municipalities = Municipality::all();
        $apprentice = Student::find($id);
        // return 'El id del estudiante es: ' . $id;
        // return 'La información que ud quiere actualizar, se vería en formato array...' . $apprentice;
        return view('students.edit', compact('apprentice', 'courses', 'countries', 'departments', 'municipalities'));
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
