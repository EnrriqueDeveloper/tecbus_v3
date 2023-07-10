<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request ->get('name'));

        $this->validate($request, [
            'name' => 'required|unique:users|max:30',
            'lastname' => 'required|max:70',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'lastname' => Str::lower($request->lastname),
            'dni' => Str::lower($request->dni),
            'rol' => Str::lower($request->rol),
            'email' => $request->email,
            'password' => Hash::make( $request-> password)

        ]);

        //Autenticar un usuario

        //auth()->attempt([
        //    'email' => $request->email,
        //    'password' => $request->password
        //]);

        // Otra forma de autenticar el usuario

        auth()->attempt($request->only('email', 'password'));

        //Redireccionar

        return redirect()->route('inicio');
    }
}
