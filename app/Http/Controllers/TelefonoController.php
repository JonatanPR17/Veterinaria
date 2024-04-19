<?php

namespace App\Http\Controllers;

use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    //
    public function index()
    {
        $telefonos = Telefono::paginate(10);
        return view('telefonos.index',compact('telefonos'));
    }
    public function store(Request $request)
    {
        $telefono = new Telefono;
        $telefono->codigo_postal = $request->codigo_postal;
        $telefono->numero_telefono = $request->numero_telefono;
        $telefono->save();
        return redirect()->route('telefonos.show',$telefono->id);
    }
    public function create()
    {
        return view('telefonos.create');
    }
    public function edit($telefono)
    {
        $telefono=Telefono::find($telefono);
        return view('telefonos.edit',compact('telefono'));
    }
    public function update(Request $request,Telefono $telefono)
    {
        $telefono->codigo_postal = $request->codigo_postal;
        $telefono->numero_telefono = $request->numero_telefono;
        $telefono->save();
        return redirect()->route('telefonos.show',$telefono->id);
    }
    public function destroy(Telefono $telefono)
    {
        $telefono->delete();
        return redirect()->route('telefonos.index',$telefono->id);
    }
    public function show($telefono)
    {
        $telefonos=Telefono::find($telefono);
        return view('telefonos.show',compact('telefonos'));
    }
}
