<?php

namespace App\Http\Controllers;
use App\Models\Paradero;

use Illuminate\Http\Request;

class MapaController extends Controller
{
    public function index()
    {
        $paraderos = Paradero::paginate(6);
        return view('mapa',compact('paraderos'));
    }
}