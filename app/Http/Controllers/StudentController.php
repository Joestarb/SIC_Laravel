<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('CrudStudents/students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("CrudStudents.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $validatedData = $request->validated();
        $student = new Student([
            'name_student' => $validatedData['name_student'],
            'lastname_student' => $validatedData['lastname_student'],
            'id_student' => $validatedData['id_student'],
            'birthdate' => $validatedData['birthdate'],
            'comments' => $validatedData['comments'],
        ]);

        $student->save();

        return redirect()->route('student')->with('success', 'Estudiante registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
