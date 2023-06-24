<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('nombre'));
        $usuarios = DB::table('usuarios')
                    ->select('id','nombre','apellidos','dni','rol')
                    ->where('nombre','LIKE','%'.$busqueda.'%')
                    ->orderBy('nombre','asc')
                    ->paginate(5);

        return view('usuarios.index', compact('usuarios','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $rol = Rol :: all();
        $data = array("lista_roles" => $rol);
        return view('usuarios.crear', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required', 'apellidos' => 'required','dni' => 'required','rol' => 'required'
        ]);

        $usuario = $request->all();

        Usuario::create($usuario);
        return redirect()->route('usuarios.index');
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
        $rol = Rol :: all();

        $data = array("lista_roles" => $rol);
        $usuario=Usuario::findOrFail($id);
        return view('usuarios.editar',compact('usuario'),$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->nombre=$request->input('nombre');
        $usuario->apellidos=$request->input('apellidos');
        $usuario->dni=$request->input('dni');
        $usuario->rol=$request->input('rol');
        $usuario->update();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}

