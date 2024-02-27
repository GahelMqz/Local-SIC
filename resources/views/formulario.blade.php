@extends('plantilla')
@section('titulo')
    Registrar estudiantes
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
                <form action="{{ url('estudiantes') }}" method="POST" class="form_alumnos">
                    @csrf
                    <h2 class="text-center mb-4">Registrarse</h2>
                    <div class="form-group">
                        <label for="name_student">Nombre</label>
                        <input type="text" class="form-control" id="name_student" name="name_student" placeholder="Nombre"
                            value="{{ old('name_student') }}">
                        @error('name_student')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido"
                            value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_student">Matricula</label>
                        <input type="text" class="form-control" id="id_student" name="id_student" placeholder="Matricula"
                            value="{{ old('id_student') }}">
                        @error('id_student')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthday">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="birthday" name="birthday"
                            placeholder="Fecha de nacimiento" value="{{ old('birthday') }}">
                        @error('birthday')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="comments">Comentarios</label>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios">{{ old('comments') }}</textarea>
                        @error('comments')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                    </div>
                    <div class="a-href">
                        <a href="{{ route('login') }}">Ir al formulario de login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
