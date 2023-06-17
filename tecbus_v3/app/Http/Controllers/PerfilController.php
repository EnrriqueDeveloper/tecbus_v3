<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('perfil.index');
    }

    public function store(Request $request)
{
    if ($request->hasFile('imagen')) {
        $path = $request->file('imagen')->store('public/imagenes');
        // Realiza las operaciones necesarias con el archivo guardado
    }

    // Otras operaciones o redireccionamiento

    return redirect()->route('perfil.index');
}
}
