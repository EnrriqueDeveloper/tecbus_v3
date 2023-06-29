@extends('layouts.app')

@section('titulo')
    Regístrate en Tecbus
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-2">
        <div class="md:w-4/12">
            <img src="{{asset('img/background.jpg')}}" alt="Imagen">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/register" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" 
                    class="border p-3 w-full rounded-lg outline-none @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}"
                    >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="lastname" class="mb-2 block uppercase text-gray-500 font-bold">Apellidos</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Ingresa tu apellido" 
                    class="border p-3 w-full rounded-lg outline-none @error('lastname') border-red-500 @enderror"
                    value="{{ old('lastname') }}"
                    >
                    @error('lastname')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="dni" class="mb-2 block uppercase text-gray-500 font-bold">DNI</label>
                    <input type="text" id="dni" name="dni" placeholder="Ingresa tu DNI" 
                    class="border p-3 w-full rounded-lg outline-none @error('lastname') border-red-500 @enderror"
                    value="{{ old('dni') }}"
                    >
                    @error('dni')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
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
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repetir contraseña" class="border p-3 w-full rounded-lg outline-none"/>
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
                w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection