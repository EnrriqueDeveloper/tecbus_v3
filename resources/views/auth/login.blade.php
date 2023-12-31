@extends('layouts.app')

@section('titulo')
    Iniciar sesión en Tecbus
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-2">
        <div class="md:w-4/12">
            <img src="{{asset('img/background.jpg')}}" alt="Imagen">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login')}}" novalidate class="mt-10">
                @csrf
                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ session('mensaje') }}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" 
                    class="border p-3 w-full rounded-lg outline-none @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}"
                    >
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" 
                    class="border p-3 w-full rounded-lg outline-none @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember"> <label class=" text-gray-500 text-sm">Mantener sesión abierta</label>
                </div>

                <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
                w-full p-3 text-white rounded-lg">
                <div class="mt-8 flex justify-center">
                    <a href="{{ route('register') }}" class=" text-sky-600 text-sm">Registrarse en tecbus</a>
                </div>
            </form>
        </div>
    </div>
@endsection