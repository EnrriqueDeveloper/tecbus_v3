@extends('layouts.app')

@section('titulo')
@endsection

@section('contenido')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    .panel-body {
        background-color: #080952;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        position: absolute;
        width: 389px;
        bottom: 0;
        left: 0px;
        top: 90px;
    }
    .nav-pills li {
        margin-bottom: 5px;
        text-align: center;
    }
    h1 {
        color: #e9ecef;
        text-align: center;
    }
    .nav-pills li a {
        display: block;
        padding: 5px 10px;
        background-color: #e9ecef;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 3px;
        text-decoration: none;
    }
    .nav-pills li a:hover {
        background-color: #ccc;
    }
    .bienv {
        padding-top: 10px;
        position: absolute;
        height: 210px;
        left: 388px;
        top: 90px;
        width: 70%;
        max-width: 100%;  
    }
    @media (max-width: 767px) {
        .panel-body {
            position: relative;
            width: auto;
            top: initial;
            left: initial;
        }

        .bienv {
            position: absolute;
            width: 70%;
            left: 15%;
            top: initial;
        }
    }
</style>
<div class="panel-body">
     <h1>NAVEGACION PRINCIPAL</h1>
     <br>
    <ul class="nav nav-pills nav-stacked">
    <li> <a href="/dash">Volver a pagina principal <i class="fas fa-home"></i></a></li>
        <li> <a href="/buses">Registrar estado del bus <i class="fas fa-bus"></i></a></li>
        <li><a href="/chofers">Registrar estado del chofer <i class="fas fa-user"></i></a></li>
        <li><a href="/usuarios">Registrar cliente <i class="fas fa-address-card"></i></a></li>
        <li><a href="#">Asignar bus,ruta y horario <i class="fas fa-cogs"></i></a></li>
        <li><a href="/paraderos">Paraderos <i class="fas fa-bus"></i></a></li>
        <li><a href="/rutas">Rutas <i class="fas fa-map-signs"></i></a></li>
        <li><a href="/ruta_paraderos">Rutas con paraderos <i class="fas fa-route"></i></a></li>

    </ul>
</div>
<div class="bienv">


<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <form action="{{ route('chofers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div calss="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gary-500 text-light font-semibold">Nombre</label>
                            <select name="nombre" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full">
                            @foreach($lista_conductores as $conductor)
                            <option value="{{$conductor->nombre}}">{{$conductor->nombre}}</option>
                            @endforeach
                            </select>                        </div>   
                        <div calss="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gary-500 text-light font-semibold">Estado</label>
                            <select name="estado" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full">
                            @foreach($lista_estados as $estado)
                            <option value="{{$estado->estado}}">{{$estado->estado}}</option>
                            @endforeach
                            </select>
                        </div> 
                    </div>
                    
                    <div class="flex items-center justify-center h-20">
                        <a type="button" href="{{ route('chofers.index') }}" class="w-auto bg-indigo-600 hover:bg-indigo-400 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                        <button type="submit" class="w-auto bg-indigo-600 hover:bg-purple-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2 px-2">Guardar</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
