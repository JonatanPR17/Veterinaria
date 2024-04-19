@extends('templates.template')

@section('title','MOSTRAR TELEFONOS')

@section('body')
    <div>
        <h1>Aqui esta el registro {{$telefonos->id}}</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Codigo Postal</th>
                <th>Numero telefono</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$telefonos->id}}</td>
                    <td>{{$telefonos->codigo_postal}}</td>
                    <td>{{$telefonos->numero_telefono}}</td>
                    <td><a href="{{route('telefonos.show',$telefonos->id)}}">Ver mas</a></td>
                </tr>
            </tbody>
        </table>
        <form action="{{route('telefonos.destroy',$telefonos->id)}}" method="POST">
            @csrf

            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        <h1><a href="{{route('telefonos.edit',$telefonos->id)}}">Editar</a></h1>
        <h1><a href="{{route('telefonos.index')}}">Volver</a></h1>
    </div>
@endsection