@extends('templates.template')

@section('title','PAGINA DE PARA EDITAR MASCOTAS')

@section('body')
    <div>
        <form action="{{route('mascotas.update',$mascota->id)}} " method="post">
            {{-- creando un token mediante la meditriz de csrf --}}
    
            @csrf
            @method('put')
    
            <label for="">
                Nombre
                <br>
                <input type="text" name="nombre"  value="{{$mascota->nombre}}">
            </label>
            <br>
            <label for="">
                Fecha nacimiento
                <br>
                <input type="text" name="fecha nacimiento" value="{{$mascota->fecha_nacimiento}}">
            </label>
            <br>
            <label for="">
                Raza
                <br>
                <input type="text" name="raza" value="{{$mascota->raza}}">
                <br>
            </label>
            <label for="">
                Peso
                <br>
                <input type="number" name="peso" value="{{$mascota->peso}}">
                <br>
            </label>
            <button type="submit">Editar formulario</button>
    </div>
@endsection