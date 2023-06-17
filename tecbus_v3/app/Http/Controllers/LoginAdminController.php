<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
         return redirect()->route('dash');
     }
}
