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
     <h1>NAVEGACION PRINCIPAL</h1>
     <br>
    <ul class="nav nav-pills nav-stacked">
    <li> <a href="/dash">Volver a la pagina principal <i class="fas fa-home"></i></a></li>
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
            
                <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Nombre</label>
                            <input type="text" name="name" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="Nombre" value="{{ $usuario->name }}">
                        </div>   
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Apellidos</label>
                            <input type="text" name="lastname" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="Apellidos" value="{{ $usuario->lastname }}">
                        </div> 
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">DNI</label>
                            <input type="text" name="dni" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="DNI" value="{{ $usuario->dni }}">
                        </div> 
                        <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" 
                    class="border p-3 w-full rounded-lg outline-none @error('email') border-red-500 @enderror"
                    value="{{ $usuario->email }}">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold"> Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="contraseña" class="border p-3 w-full rounded-lg outline-none" value="{{ $usuario->password }}"/>
                </div>
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Rol</label>
                            <select name="rol" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full">
                            <option value="{{$usuario->rol}}">{{$usuario->rol}}</option>
                            @foreach($lista_roles as $rol)
                            <option value="{{$rol->rol}}">{{$rol->rol}}</option>
                            @endforeach
                            </select>                        </div> 
                    </div>
                    
                   
                    <div class="flex items-center justify-center h-20">
                        <a type="button" href="{{ route('usuarios.index') }}" class="w-auto bg-indigo-600 hover:bg-indigo-400 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                        <button type="submit" class="w-auto bg-indigo-600 hover:bg-purple-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2 px-2">Guardar</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection