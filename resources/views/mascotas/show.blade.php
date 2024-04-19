@extends('templates.template')

@section('title','PAGINA PARA MOSTRAR A MASCOTAS POR INDICADORES')

@section('body')
    <div>
        <h1>Soy el registro {{$mascotas->id}}</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Peso</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$mascotas->id}}</td>
                    <td>{{$mascotas->nombre}}</td>
                    <td>{{$mascotas->raza}}</td>
                    <td>{{$mascotas->peso}}</td>
                </tr>
            </tbody>
        </table>
        <h1><a href="{{route('mascotas.edit',$mascotas->id)}}"></a></h1>

        <form action="{{route('mascotas.destroy',$mascotas->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" >Eliminar</button>
        </form>
        <h1><a href="{{route('mascotas.edit',$mascotas->id)}}">Editar</a></h1>
        <h1><a href="{{route('mascotas.index')}}">Volver</a></h1>
    </div>

@endsection