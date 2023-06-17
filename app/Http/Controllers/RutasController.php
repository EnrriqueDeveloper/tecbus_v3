<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruta;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas = Ruta::paginate(5);
        return view('rutas.index', compact('rutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rutas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'num_ruta' => 'required'
        ]);

        $ruta = $request->all();

        Ruta::create($ruta);
        return redirect()->route('rutas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruta=Ruta::findOrFail($id);
        return view('rutas.editar',compact('ruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruta = Ruta::findOrFail($id);

        $ruta->num_ruta=$request->input('num_ruta');
        $ruta->update();
        return redirect()->route('rutas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruta $ruta)
    {
        $ruta->delete();
        return redirect()->route('rutas.index');
    }
}
