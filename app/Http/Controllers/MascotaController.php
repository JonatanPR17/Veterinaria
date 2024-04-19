<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    //
    public function index()
    {
        $mascotas = Mascota::paginate(10);
        return view('mascotas.index',compact('mascotas'));
    }
    public function store(Request $request)
    {
        $mascota = new Mascota;
        $mascota->nombre = $request->nombre;
        $mascota->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota->raza = $request->raza;
        $mascota->peso = $request->peso;
        $mascota->save();
        return redirect()->route('mascotas.show',$mascota);
    }
    public function create()
    {
        return view('mascotas.create');
    }
    public function edit($mascota)
    {
        $mascota=Mascota::find($mascota);
        return view('mascotas.edit',compact('mascota'));
    }
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->nombre = $request->nombre;
        $mascota->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota->raza = $request->raza;
        $mascota->peso = $request->peso;
        $mascota->save();
        return redirect()->route('mascotas.show',$mascota->id);
    }
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('mascotas.index',$mascota->id);
    }
    public function show($mascota)
    {
        $mascotas= Mascota::find($mascota);
        return view('mascotas.show',compact('mascotas'));
    }
}
