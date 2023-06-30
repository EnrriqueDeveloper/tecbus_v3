@extends('layouts_admin.app')

@section('titulo')
@endsection

@section('contenido')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .panel-body {
        background-color: #1D2C43;
        padding: 10px;
        position: absolute;
        bottom: 0;
        left: 0px;
        top: 90px;
        overflow: hidden;
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
    <div class="flex flex-col items-center justify-center">
        <img src="{{ asset('img/admin.png') }}" alt="Imagen" class="mx-auto w-18 h-18">
        <p class="text-gray-400 uppercase  text-sm mt-2">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</p>
    </div>
    <br>
    <h1>NAVEGACION PRINCIPAL</h1>
    <br>
    <ul class="nav nav-pills nav-stacked">
        <li> <a href="/dash">Pagina principal <i class="fas fa-home"></i></a></li>
        <li> <a href="/buses">Estado del bus <i class="fas fa-bus"></i></a></li>
        <li><a href="/chofers">Estado del chofer <i class="fas fa-user"></i></a></li>
        <li><a href="/usuarios">Registrar cliente <i class="fas fa-address-card"></i></a></li>
        <li><a href="/paraderos">Paraderos <i class="fas fa-bus"></i></a></li>
        <li><a href="/rutas">Rutas <i class="fas fa-map-signs"></i></a></li>
        <li><a href="/ruta_paraderos">Rutas con paraderos <i class="fas fa-route"></i></a></li>
    </ul>
</div>
<div class="bienv">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('ruta_paraderos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Num ruta</label>
                            <select name="num_ruta" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full">
                                @foreach($lista_rutas as $ruta)
                                <option value="{{$ruta->ruta}}">{{$ruta->num_ruta}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Nom paraderos</label>
                            <select name="n_paradero" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full">
                                @foreach($lista_paraderos as $paradero)
                                <option value="{{$paradero->paradero}}">{{$paradero->n_paradero}}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Hora partida</label>
                            <input type="text" name="hora_partida" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="hora_partida">
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-20">
                        <a type="button" href="{{ route('ruta_paraderos.index') }}" class="w-auto bg-indigo-600 hover:bg-indigo-400 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                        <button type="submit" class="w-auto bg-indigo-600 hover:bg-purple-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2 px-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection