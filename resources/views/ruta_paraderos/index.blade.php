@extends('layouts_admin.app')

@section('titulo')
@endsection

@section('contenido')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    span:not(.font-medium) {
        display: flex
    }

    svg {
        width: 30px;
    }

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
            width: auto;
            left: initial;
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
                <div class="flex justify-between">
                    <a href="{{ route('ruta_paraderos.create') }}" class="bg-indigo-600 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 duration-200 each-in-out mr-2">Crear</a>
                    <a href="{{ route('ruta_paraderos.pdf') }}" class="bg-gray-900 hover:bg-gray-400 rounded text-white font-bold py-2 px-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                        </svg>
                        <span class="ml-2">Reporte</span>
                    </a>
                </div>
                <td class="border px-4 py2">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-300 text-white">
                                <th class="border px4 py-2">ID</th>
                                <th class="border px4 py-2">NUM RUTA</th>
                                <th class="border px4 py-2">PARADEROS</th>
                                <th class="border px4 py-2">HORA PARTIDA</th>
                                <th class="border px4 py-2">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruta_paraderos as $rutaparadero)
                            <tr>
                                <td style="text-align:center">{{ $rutaparadero->id }}</td>
                                <td style="text-align:center">{{ $rutaparadero->num_ruta }}</td>
                                <td style="text-align:center">{{ $rutaparadero->n_paradero }}</td>
                                <td style="text-align:center">{{ $rutaparadero->hora_partida }}</td>

                                <td class="border px-4 py2">
                                    <div class="flex justify-center rounded-lg text-lg" role="group">
                                        <!-- boton editar -->
                                        <a href="{{ route('ruta_paraderos.edit', $rutaparadero->id) }}" class="bg-gray-900 hover:bg-gray-400 rounded text-white font-bold py-2 px-4">Editar</a>
                                        <!-- boton borrar -->
                                        <form action="{{ route('ruta_paraderos.destroy', $rutaparadero->id) }}" method="POST" class="formEliminar">
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
                        {!! $ruta_paraderos->links() !!}
                    </div>
            </div>
        </div>
    </div>

</div>
@endsection