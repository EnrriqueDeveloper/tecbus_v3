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

    .bienv img {
        padding-top: 10px;
        position: absolute;
        height: 310px;
        left: 388px;
        top: 90px;
        width: 86.5%;
        max-width: 100%;
    }

    .bienv iframe {
        padding-top: 10px;
        position: absolute;
        height: 60%;
        max-height: 100%;
        left: 388px;
        top: 298px;
        width: 86.5%;
        max-width: 100%;

    }

    @media (max-width: 767px) {
        .panel-body {
            position: relative;
            width: auto;
            top: initial;
            left: initial;
        }



    }
</style>
<div class="panel-body">
    <div class="flex flex-col items-center justify-center">
        <img src="{{ asset('img/admin.png') }}" alt="Imagen" class="mx-auto w-18 h-18 mt-2">
        <h1 class="mt-3">Bienvenido Aministrador:</h1>
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
    <img src="img/bie.png" class="ml-[-182px] mt-[-10px] ">
    <iframe class="ml-[-182px] mt-[-9px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.9952976425354!2d-76.95528060160524!3d-12.044167799999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c68826cec0c3%3A0xf6df8bcd4e0a5fcf!2sTecsup%20-%20Santa%20Anita!5e0!3m2!1ses!2spe!4v1686078802226!5m2!1ses!2spe" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



@endsection