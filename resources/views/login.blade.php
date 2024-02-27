@extends('plantilla')
@section('titulo')
    Inicio de sesión de usuario
@endsection
@section('contenido')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .a-href {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 20px 0;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('login') }}" method="POST" class="form_alumnos">
                    @csrf
                    <h2 class="text-center mb-4">Iniciar sesión</h2>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                            value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula"
                            value="{{ old('matricula') }}">
                        @error('matricula')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                    </div>
                    <div class="a-href">
                        <a href="{{ route('formulario') }}">Ir al formulario de registro</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
