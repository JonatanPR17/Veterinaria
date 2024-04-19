@extends('templates.template')

@section('title','PAGINA PARA CREAR MASCOTAS')

@section('body')
    <div>
        <div>
            <h1>Crear mas registros</h1>
            <form action="{{route('mascotas.update',$mascotas->id)}} " method="post">
        
                @csrf
        
                <label for="">
                    Nombre
                    <br>
                    <input type="text" name="nombre" >
                </label>
                <br>
                <label for="">
                    Fecha nacimiento
                    <br>
                    <input type="text" name="fecha nacimiento" >
                </label>
                <br>
                <label for="">
                    Raza
                    <br>
                    <input type="text" name="raza" >
                    <br>
                </label>
                <label for="">
                    Peso
                    <br>
                    <input type="number" name="peso" >
                    <br>
                </label>
                <button type="submit">Crear</button>
        </div>
    </div>
@endsection