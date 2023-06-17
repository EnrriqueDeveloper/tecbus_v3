@extends('layouts.app')

@section('titulo')
Pagina Principal
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-2">
    <div class="md:w-4/12">
        <img src="{{asset('img/background.jpg')}}" alt="Imagen">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form method="POST" action="{{ route('login')}}" novalidate class="mt-10">
            <h1 class="mb-2 block uppercase text-gray-500 font-bold text-center">¿ Ingresar como ?</h1>
            <div class="mt-20 flex justify-center items-center">
                <a href="{{ route('login-admin') }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-80 p-3 text-white rounded-lg text-center block">
                    Administrador
                </a>
            </div>
            <div class="mt-10 flex justify-center items-center">
                <a href="{{ route('login') }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-80 p-3 text-white rounded-lg text-center block">
                    Usuario
                </a>
            </div>
            <div class="flex justify-center mt-10">
                <img src="{{ asset('img/roles.png') }}" alt="Imagen aquí">
            </div>
        </form>
    </div>
</div>
@endsection