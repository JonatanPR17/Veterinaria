@extends('templates.template')

@section('title','PAGINA DE TELEFONOS')

@section('body')
    <div>
        <h1>Lista de telefonos</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Codigo Postal</th>
                <th>Numero telefono</th>
            </thead>
            <tbody>
                @foreach ($telefonos as $telefono)
                    <tr>
                        <td>{{$telefono->id}}</td>
                        <td>{{$telefono->codigo_postal}}</td>
                        <td>{{$telefono->numero_telefono}}</td>
                        <td><a href="{{route('telefonos.show',$telefono->id)}}">Ver mas</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h1><a href="{{route('telefonos.create')}}">Crear</a></h1>
        
    </div>
@endsection