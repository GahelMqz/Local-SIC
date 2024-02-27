<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar lista de registros

        /*$students = Student::all();
        return view('students',compact('students'));*/
        $students = Student::all();
        return view("students", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar el formular de creacion
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
    $request->validate([
        'name_student' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'id_student' => 'required|string|max:255|unique:students,id_student',
        'birthday' => 'required|date',
        'comments' => 'nullable|string',
    ]);

    // Crear un nuevo estudiante
    Student::create([
        'name_student' => $request->name_student,
        'last_name' => $request->last_name,
        'id_student' => $request->id_student,
        'birthday' => $request->birthday,
        'comments' => $request->comments,
    ]);

    // Redireccionar a alguna página después de guardar los datos
    return redirect('/estudiantes')->with('success', 'Estudiante registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalles
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Mostrar formulario para editar con datos precargados
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
        //Procesa la actualizacion
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar el registro
    }
}
