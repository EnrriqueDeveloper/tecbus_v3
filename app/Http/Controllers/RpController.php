<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paradero;
use App\Models\Ruta;
use App\Models\RutaParadero;

class RpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $ruta_paraderos = RutaParadero::paginate(5);
        return view('ruta_paraderos.index', compact('ruta_paraderos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $ruta = Ruta :: all();
        $data = array("lista_rutas" => $ruta);


        $paradero = Paradero :: all();
        $data2 = array("lista_paraderos" => $paradero);

        return view('ruta_paraderos.crear', $data,$data2);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'num_ruta' => 'required', 'n_paradero' => 'required','hora_partida' => 'required'
        ]);

        $rutaparadero = $request->all();

        RutaParadero::create($rutaparadero);
        return redirect()->route('ruta_paraderos.index');
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

        $rutaparadero=RutaParadero::findOrFail($id);        
        $ruta = Ruta :: all();
        $data = array("lista_rutas" => $ruta);
        $paradero = Paradero :: all();
        $data2 = array("lista_paraderos" => $paradero);
        return view('ruta_paraderos.editar',compact('ruta_paraderos'),$data,$data2);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rutaparadero = RutaParadero::findOrFail($id);

        $rutaparadero->num_ruta=$request->input('num_ruta');
        $rutaparadero->n_paradero=$request->input('n_paradero');
        $rutaparadero->hora_partida=$request->input('hora_partida');
        $rutaparadero->update($request->all());;
        return redirect()->route('ruta_paraderos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RutaParadero $rutaparadero)
    {
        $rutaparadero->delete();
        return redirect()->route('ruta_paraderos.index');
    }
}
