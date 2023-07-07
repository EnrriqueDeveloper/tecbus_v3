@extends('layouts.app')

@section('titulo')
¿Qué ofrecemos para ti?
@endsection

@section('contenido')

<div class="flex justify-center items-center">
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/setting.png') }}" alt="" class="w-16 h-16">
        <p class="text-center font-bold">Soporte</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/chair.png') }}" alt="" class="w-16 h-16">
        <p class="text-center font-bold">Comodidad</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/route.png') }}" alt="" class="w-16 h-16">
        <p class="text-center font-bold">Rutas</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/driver.png') }}" alt="" class="w-16 h-16">
        <p class="text-center font-bold">Seguridad</p>
    </div>
</div>
<div class="flex justify-center mt-8">
    @if ($paraderos->isNotEmpty())
        @foreach ($paraderos as $index => $paradero)
            <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
                <img src="{{ asset('img/card' . ($index + 1) . '.png') }}" alt="">
                <p class="text-justify font-bold">{{ $paradero->n_paradero }}</p>
                <p class="text-justify">Hora estimada: {{ $paradero->hora_estimada }}</p>
            </div>
            @if (($index + 1) % 3 === 0)
                </div>
                <div class="flex justify-center items-center mt-4">
            @endif
        @endforeach
    @endif
</div>

<div>
    {!! $paraderos->links() !!}
</div>
@endsection







