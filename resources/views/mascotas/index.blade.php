@extends('templates.template')

@section('title','PAGINA MASCOTAS')

@section('body')
    <div>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Fecha de nacimiento</th>
                <th>Raza</th>
                <th>Peso</th>

            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                    <tr>
                        <td>{{$mascota->id}}</td>
                        <td>{{$mascota->nombre}}</td>
                        <td>{{$mascota->fecha_nacimiento}}</td>
                        <td>{{$mascota->raza}}</td>
                        <td>{{$mascota->peso}}</td>
                        <td><a href="{{route('mascotas.show',$mascota->id)}}">Ver mas</a></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection