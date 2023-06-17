<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Estado;
use App\Models\Usuario;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::paginate(5);
        return view('buses.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estado = Estado :: all();
        $data = array("lista_estados" => $estado);
        return view('buses.crear',$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required', 'estado' => 'required'
        ]);

        $bus = $request->all();

        Bus::create($bus);
        return redirect()->route('buses.index');
        
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
        $bus=Bus::findOrFail($id);        
        $estado = Estado::all();
        $data = array("lista_estados" => $estado);
        return view('buses.editar',compact('bus'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bus = Bus::findOrFail($id);

        $bus->placa=$request->input('placa');
        $bus->estado=$request->input('estado');
        $bus->update();
        return redirect()->route('buses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('buses.index');
    }
}
