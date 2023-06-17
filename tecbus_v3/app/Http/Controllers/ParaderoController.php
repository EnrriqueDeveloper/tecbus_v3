<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paradero;

class ParaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paraderos = Paradero::paginate(5);
        return view('paraderos.index', compact('paraderos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paraderos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'n_paradero' => 'required', 'hora_estimada' => 'required'
        ]);

        $paradero = $request->all();

        Paradero::create($paradero);
        return redirect()->route('paraderos.index');
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
        $paradero=Paradero::findOrFail($id);
        return view('paraderos.editar',compact('paradero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paradero = Paradero::findOrFail($id);

        $paradero->n_paradero=$request->input('n_paradero');
        $paradero->hora_estimada=$request->input('hora_estimada');
        $paradero->update();
        return redirect()->route('paraderos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paradero $paradero)
    {
        $paradero->delete();
        return redirect()->route('paraderos.index');
    }
}
