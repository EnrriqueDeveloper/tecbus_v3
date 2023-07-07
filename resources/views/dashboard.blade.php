@extends('layouts.app')

@section('titulo')

Mi Perfil

@endsection

@section('contenido')

<div class="flex justify-center  ">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex flex-col items-center ">
        <div class="md:w-8/12 lg:w-6/12 px-5">
            <div class="flex justify-center">
                <img src="{{ asset('img/user1.png') }}" alt="Imagen aquí">
            </div>
            @if(auth()->user()->id == auth()->user()->id)
            <div class="flex justify-center mt-2 uppercase">
                <p class="text-gray-700 text-2sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</p>
                @auth
                <a href="{{route('perfil.index', auth()->user())}}" class="ml-2 hover:text-blue-600 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>

                </a>
                @endif
                @endauth
            </div>

            <div class="flex justify-center mt-2 text-blue-700 text-2sm font-bold">
                <p>Diseño y Desarrollo de Software</p>
            </div>
            <div class="flex justify-center mt-2 text-gray-500 text-2sm font-bold">
                <p>3° Ciclo</p>
            </div>
            <div class="flex justify-center mt-2 text-gray-700 text-2sm font-bold">
                <p>Código: 101336</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-xl ">
                <div class="flex justify-center mt-2 ">
                    {!! QrCode::size(200)->color(15, 184, 238)->generate('Cliente Registrado'); !!}
                </div>
                <div class="flex justify-center mt-2 text-gray-700 text-2sm font-bold">
                    <p>Scanea el código Qr</p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection