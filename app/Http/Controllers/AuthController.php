<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->only('name_student', 'id_student');

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Si las credenciales son válidas, redirigir al usuario a una página específica
            return redirect()->intended('/estudiantes');
        }

        // Si las credenciales son inválidas, redirigir de nuevo al formulario de inicio de sesión
        return redirect()->back()->withErrors(['message' => 'Credenciales inválidas'])->withInput();
    }
}
