@extends('templates.template')

@section('title', 'Página Principal')

@section('body')

    <style>

        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #4CAF50;
            padding: 20px 0;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #fff;
        }

        .navigation {
            background-color: #333;
            padding: 10px 0;
        }

        .navigation ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .navigation ul li {
            display: inline;
        }

        .navigation ul li a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .navigation ul li a:hover {
            background-color: #4CAF50;
        }

    </style>

    <div class="header">
        <h1>Veterinaria Tomy</h1>
    </div>

    <nav class="navigation">
        <ul>
            <li><a href="{{ route('personas.index') }}">Personas</a></li>
            <li><a href="{{ route('telefonos.index') }}">Teléfonos</a></li>
            <li><a href="{{ route('mascotas.index') }}">Mascotas</a></li>
        </ul>
    </nav>
@endsection
