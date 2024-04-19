<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index()
    {
        return view('clientes.index');
    }
    public function store()
    {
        return "";
    }
    public function create()
    {
        return view('clientes.create');
    }
    public function edit($cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }
    public function update($cliente)
    {
        return "";
    }
    public function destroy($cliente)
    {
        return "";
    }
    public function show($cliente)
    {
        return view('clientes.show',compact('cliente'));
    }
}
