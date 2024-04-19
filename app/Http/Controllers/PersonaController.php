<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //
    public function index()
    {
        $personas= Persona::paginate(10);
        return view('personas.index',compact('personas'));
    }
    public function store(Request $request)
    {
        $persona = new Persona;
        $persona->nombre= $request->nombre;
        $persona->apellido_paterno= $request->apellido_paterno;
        $persona->apellido_materno= $request->apellido_materno;
        $persona->fecha_nacimiento= $request->fecha_nacimiento;
        $persona->usuario= $request->usuario;
        $persona->contraseña=$request->contraseña;
        $persona->categoria_persona= $request->categoria_persona;
        $persona->save();
        return redirect()->route('personas.show',$persona);
    }
    public function create()
    {
        return view('personas.create');
    }
    public function edit($persona)
    {
        $persona=Persona::find($persona);
        return view('personas.edit',compact('persona'));
    }
    public function update(Request $request, Persona $persona)
    {
        /* return $persona; */
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno= $request->apellido_paterno;
        $persona->apellido_materno= $request->apellido_materno;
        $persona->fecha_nacimiento= $request->fecha_nacimiento;
        $persona->usuario= $request->usuario;
        $persona->contraseña= $request->contraseña;
        $persona->categoria_persona= $request->categoria_persona;
        $persona->save();
        return redirect()->route('personas.show',$persona->id);
    }
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index',$persona->id);
    }
    public function show($persona)
    {
        $personas=Persona::find($persona);
        return view('personas.show',compact('personas'));
    }
}
