<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Chofer;
use App\Models\Estado;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chofers = Chofer::paginate(5);
        return view('chofers.index', compact('chofers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $conductor = User::where('rol','Conductor')->get();
        $data2 = array("lista_conductores" => $conductor);

        $estado = Estado :: all();
        $data = array("lista_estados" => $estado);
        return view('chofers.crear',$data,$data2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required',Rule::unique('chofers')], 'estado' => 'required'
        ]);

        $chofer = $request->all();

        Chofer::create($chofer);
        return redirect()->route('chofers.index');
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
        $chofer = Chofer::findOrFail($id);
        $conductor = User::where('rol','Conductor')->get();
        $data2 = array("lista_conductores" => $conductor);
        $estado = Estado::all();
        $data = array("lista_estados" => $estado, "chofer" => $chofer);
        return view('chofers.editar', $data,$data2);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chofer = Chofer::findOrFail($id);

        $chofer->nombre=$request->input('nombre');
        $chofer->estado=$request->input('estado');
        $chofer->update();
        return redirect()->route('chofers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chofer $chofer)
    {
        $chofer->delete();
        return redirect()->route('chofers.index');
    }
}
