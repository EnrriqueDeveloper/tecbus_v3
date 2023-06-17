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
            width: auto;
            left: initial;
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
                <a type="button" href="{{ route('rutas.create') }}" class="bg-indigo-600 px-12 py-2 rounded text-gray-200 font-semibold 
                                                                                    hover:bg-indigo-800 duration-200 each-in-out height:6px">Crear</a>
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-300 text-white">
                            <th class="border px4 py-2">ID</th>
                            <th class="border px4 py-2">NUMERO RUTA</th>
                            <th class="border px4 py-2">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rutas as $ruta)
                        <tr>
                            <td style="text-align:center">{{ $ruta->id }}</td>
                            <td style="text-align:center">{{ $ruta->num_ruta }}</td>
                            <td class="border px-4 py2">
                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <!-- boton editar -->
                                    <a href="{{ route('rutas.edit', $ruta->id) }}" class="bg-gray-900 hover:bg-gray-400 rounded text-white font-bold py-2 px-4">Editar</a>
                                    <!-- boton borrar -->
                                    <form action="{{ route('rutas.destroy', $ruta->id) }}" method="POST" class="formEliminar">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-indigo-500 hover:bg-indigo-200 rounded text-white font-bold py-2 px-4 m-md">Borrar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                    <div>
                        {!! $rutas->links() !!}
                    </div>
            </div>
        </div>
    </div>

</div>
@endsection


