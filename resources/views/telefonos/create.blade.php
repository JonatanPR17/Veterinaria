@extends('templates.template')

@section('title','CREAR TELEFONOS')

@section('body')
<div>
    <h1>Creacion de nuevos registros</h1>
    <form action="{{route('telefonos.store')}} " method="POST">        
        @csrf

        <label for="">
            Codigo postal
            <br>
            <input type="number" name="codigo postal">
        </label>
        <br>
        <label for="">
            Numero de telefono
            <br>
            <input type="number" name="numero telefono">
        </label>
        <br>
        <button type="submit">Crear</button>
    </form>
</div>
@endsection