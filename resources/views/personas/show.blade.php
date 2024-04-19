@extends('templates.template')

@section('title','PAGINA PRINCIPAL DE PERSONAS PARA MOSTRAR')

@section('body')
    <div>
        <h1>Informacion de la persona {{$personas->id}}</h1>
        <div>
            <table>
                <style>
                    th,td{
                        border: solid black 1px;
                    }
                </style>
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$personas->id}}</td>
                        <td>{{$personas->nombre}}</td>
                        <td>{{$personas->categoria_persona}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="{{route('personas.destroy',$personas->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </div>
        </div>
        <div>
            <a href="{{route('personas.edit',$personas->id)}}">Editar</a>
            <a href="{{route('personas.index',$personas->id)}}">Volver</a>
        </div>
    </div>
@endsection