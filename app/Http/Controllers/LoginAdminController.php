<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
     //
     public function index()
     {
        
        return view('admin.login-admin');
     }
     public function store(Request $request)
     {
         $this->validate($request, [
             'email' => 'required|email',
             'password' => 'required',
         ]);
 
         if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
             return back()->with('mensaje', 'Credenciales Incorrectas');
         }

         $user = auth()->user();
         if ($user->rol !== 'Administrador') {
             auth()->logout();
             abort(403, 'Acceso denegado.');
         }

         return redirect()->route('dash');
     }
}
