@extends('templates.template')

@section('title','PAGINA PRINCIPAL DE PERSONAS PARA EDITAR PERSONAS')

@section('body')
    <div>
        <div>Actualizando a la persona {{$persona->id}}</div>
        <div>
            <form action="{{route('personas.update',$persona)}} " method="post">
                {{-- creando un token mediante la meditriz de csrf --}}
        
                @csrf
                @method('put')
        
                <label for="">
                    Nombre
                    <br>
                    <input type="text" name="nombre"  value="{{$persona->nombre}}">
                </label>
                <br>
                <label for="">
                    Apellido Paterno
                    <br>
                    <input type="text" name="apellido paterno" value="{{$persona->apellido_paterno}}">
                </label>
                <br>
                <label for="">
                    Apellido Materno
                    <br>
                    <input type="text" name="apellido materno" value="{{$persona->apellido_materno}}">
                    <br>
                </label>
                <br>
                <label for="">
                    Fecha de Nacimiento
                    <br>
                    <input type="date" name="fecha nacimiento" value="{{$persona->fecha_nacimiento}}">
                    <br>
                </label>
                <br>
                <label for="">
                    usuario
                    <br>
                    <input type="email" name="usuario" value="{{$persona->usuario}}">
                    <br>
                </label>
                <label for="">
                    Contraseña
                    <br>
                    <input type="password" name="contraseña" value="{{$persona->contraseña}}">
                    <br>
                </label>
        
                <label for="">
                    categoria
                    <br>
                    <input type="text" name="categoria persona" value="{{$persona->categoria_persona}}">
                    <br>
                </label>
        
                <button type="submit">Editar formulario</button>
        
            </form>
        </div>
    </div>
@endsection