@extends('templates.template')

@section('title','EDITAR TELEFONOS')

@section('body')
    <div>
        <h1>EDITAR EL FORMULARIO</h1>
        <form action="{{route('telefonos.update',$telefono->id)}} " method="post"> 
                   
            @csrf
            @method('put')

            <label for="">
                Codigo postal
                <br>
                <input type="number" name="codigo postal" value="{{$telefono->codigo_postal}}  ">
            </label>
            <br>
            <label for="">
                Numero de telefono
                <br>
                <input type="number" name="numero telefono" value="{{$telefono->numero_telefono}}">
            </label>
            <br>
            <button type="submit" >Editar</button>
        </form>
    </div>
@endsection