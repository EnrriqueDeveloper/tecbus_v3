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

        .bienv img {
            padding-top: 10px;
            position: absolute;
            height: 210px;
            left: 388px;
            top: 90px;
            width: 70%;
            max-width: 100%;
        }

        .bienv iframe {
            padding-top: 10px;
            position: absolute;
            height: 50%;
            max-height: 100%;
            left: 388px;
            top: 298px;
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
                width: 95%;
                left: 5%;
                top: initial;
            }

            .bienv img,
            .bienv iframe {
                position: static;
                width: 100%;
                max-width: 100%;
                height: auto;
                max-height: 100%;
            }
        }
    </style>
<div class="panel-body">
     <h1>NAVEGACION PRINCIPAL</h1>
     <br>
    <ul class="nav nav-pills nav-stacked">
    <li> <a href="/principal">Volver a pagina principal <i class="fas fa-home"></i></a></li>
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
<img src="img/bie.png" />
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.9952976425354!2d-76.95528060160524!3d-12.044167799999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c68826cec0c3%3A0xf6df8bcd4e0a5fcf!2sTecsup%20-%20Santa%20Anita!5e0!3m2!1ses!2spe!4v1686078802226!5m2!1ses!2spe"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


@endsection