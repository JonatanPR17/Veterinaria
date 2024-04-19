@extends('templates.template')

@section('title', 'Página Principal de Personas')

@section('body')
    <style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 2px solid #4CAF50;
        }

        th, td {
            border: 1px solid #4CAF50;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        /* Estilos para el enlace */
        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Estilos para el botón */
        .create-button {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .create-button:hover {
            background-color: #45a049;
        }

        /* Estilos para el contenedor principal */
        .container {
            text-align: center;
        }

        /* Estilos para el título */
        .title {
            margin-bottom: 20px;
        }
    </style>

    <div class="container">
        <div class="title">
            <h1 class="text-black-800 font-bold text-2xl">Veterinaria Tomy</h1>
            <h2 class="text-black-800 font-bold text-xl">Lista de personas</h2>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Materno</th>
                        <th>Apellido Paterno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Dirección</th>
                        <th>Categoría</th>
                        <th>Ver más</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido_materno }}</td>
                            <td>{{ $persona->apellido_paterno }}</td>
                            <td>{{ $persona->fecha_nacimiento }}</td>
                            <td>{{ $persona->direccion }}</td>
                            <td>{{ $persona->categoria_persona }}</td>
                            <td><a href="{{ route('personas.show', $persona->id) }}">Mostrar</a></td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h2>Crear más registros de personas</h2>
            <div>
                <form action="{{ route('personas.create') }}">
                    <button class="create-button" type="submit">Crear nuevas personas</button>
                </form>
            </div>
        </div>
    </div>
@endsection
