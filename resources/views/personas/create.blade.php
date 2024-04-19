@extends('templates.template')

@section('title', 'PÁGINA PRINCIPAL DE PERSONAS PARA CREAR MÁS PERSONAS')

@section('body')
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .container form {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            text-align: left;
            margin-bottom: 20px;
        }

        .container form label {
            display: block;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .container form input[type="text"],
        .container form input[type="email"],
        .container form input[type="password"],
        .container form input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .container form button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container form button[type="submit"]:hover {
            background-color: #45a049;
        }

        .container a {
            color: #4CAF50;
            text-decoration: none;
        }

        .container a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="container">
        <h1>Crear personas</h1>
        <form action="{{ route('personas.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="apellido_paterno">

            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" name="apellido_materno">

            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento">

            <label for="usuario">Usuario (Email)</label>
            <input type="email" name="usuario">

            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña">

            <label for="categoria_persona">Categoría</label>
            <input type="text" name="categoria_persona">

            <button type="submit">Enviar</button>
        </form>

        <div>
            <a href="{{ route('personas.index') }}">Volver</a>
        </div>
    </div>
@endsection
