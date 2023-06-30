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

         // función para validar a los usuarios que tengan rol administrador
         /*$this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->rol === 'Administrador') {
                return $next($request);
            }

            abort(403, 'Acceso denegado.');
            
            });*/
 
         if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
             return back()->with('mensaje', 'Credenciales Incorrectas');
         }
         return redirect()->route('dash');
     }
}
