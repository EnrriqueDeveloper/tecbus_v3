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
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden ">
        <img src="{{ asset('img/card1.png') }}" alt="">
        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo fugit vero sit laboriosam dignissimos quidem error tempora tenetur aliquam reiciendis. Quod consectetur minima quibusdam quam esse hic dolor magnam quasi.</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/card2.png') }}" alt="">
        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo fugit vero sit laboriosam dignissimos quidem error tempora tenetur aliquam reiciendis. Quod consectetur minima quibusdam quam esse hic dolor magnam quasi.</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/card3.png') }}" alt="">
        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo fugit vero sit laboriosam dignissimos quidem error tempora tenetur aliquam reiciendis. Quod consectetur minima quibusdam quam esse hic dolor magnam quasi.</p>
    </div>
    </div>
<div class="flex justify-center mt-8">
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden ">
        <img src="{{ asset('img/card4.png') }}" alt="">
        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo fugit vero sit laboriosam dignissimos quidem error tempora tenetur aliquam reiciendis. Quod consectetur minima quibusdam quam esse hic dolor magnam quasi.</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/card5.png') }}" alt="">
        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo fugit vero sit laboriosam dignissimos quidem error tempora tenetur aliquam reiciendis. Quod consectetur minima quibusdam quam esse hic dolor magnam quasi.</p>
    </div>
    <div class="flex flex-col items-center mx-10 bg-white rounded-lg overflow-hidden">
        <img src="{{ asset('img/card6.png') }}" alt="">
        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo fugit vero sit laboriosam dignissimos quidem error tempora tenetur aliquam reiciendis. Quod consectetur minima quibusdam quam esse hic dolor magnam quasi.</p>
    </div>
</div>

@endsection
