<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('name'));
        $usuarios = DB::table('Users')
                    ->select('id','name','lastname','email','password','dni','rol')
                    ->where('name','LIKE','%'.$busqueda.'%')
                    ->orderBy('name','asc')
                    ->paginate(9);

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
            'name' => 'required', 'lastname' => 'required','email' => 'required','password' => 'required','dni' => 'required','rol' => 'required'
        ]);

        $usuario = $request->all();

        User::create($usuario);
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
        $usuario=User::findOrFail($id);
        return view('usuarios.editar',compact('usuario'),$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name=$request->input('name');
        $usuario->lastname=$request->input('lastname');
        $usuario->email=$request->input('email');
        $usuario->password=$request->input('password');
        $usuario->dni=$request->input('dni');
        $usuario->rol=$request->input('rol');
        $usuario->update();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}

