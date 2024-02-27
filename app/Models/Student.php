<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name_student', 'last_name', 'id_student', 'birthday', 'comments'];

    // Reglas de validación
    public static $rules = [
        'name_student' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'id_student' => 'required|string|max:255|unique:students,id_student',
        'birthday' => 'required|date',
        'comments' => 'nullable|string',
    ];
    // Función para validar los datos de un estudiante
    public static function validateStudent($data)
    {
        return validator($data, self::$rules);
    }
}
