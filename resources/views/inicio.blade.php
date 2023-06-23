@extends('layouts.app')

@section('contenido')
<script src="{{ asset('js/alpine.js') }}"></script>
<div class="w-full mt-[-40px]">
  <div class="aspect-w-16 aspect-h-9">
    <video src="{{ asset('video/tecbus.mp4') }}" autoplay controls class="w-full h-full"></video>
  </div>
</div>
<div class="max-w-2xl mx-auto grid grid-cols-2 gap-80 mt-7">
    <div class="bg-white rounded-lg overflow-hidden shadow-lg w-[250%] ml-[-100px]">
        <div class="flex items-center px-6 py-4">
            <img class="w-12 h-12 mr-4" src="{{ asset('img/contenido.svg') }}" alt="Imagen aquí">
            <h1 class="font-bold text-xl">¿Por qué elegir Tecbus?</h1>
        </div>
        <div class="px-6 py-4 text-justify">
            <p class="text-gray-700">TecBus ofrece una interfaz intuitiva y fácil de usar, podría ser conveniente para los estudiantes y el personal de Tecsup acceder rápidamente a la información que necesitan sobre los buses. Esto podría ahorrar tiempo y evitar confusiones al encontrar los horarios y las rutas adecuadas.</p>
            <p class="text-gray-700">Aparte, TecBus proporciona actualizaciones en tiempo real sobre los horarios de los buses, los usuarios podrían confiar en la plataforma para obtener información precisa y actualizada. Esto sería especialmente útil en situaciones en las que los horarios cambian debido a circunstancias imprevistas.</p>
        </div>
        <div class="flex justify-end">
            <img class="w-full" src="{{ asset('img/tecbus.png') }}" alt="imagen">
        </div>
    </div>

    <!-- Segunda tarjeta -->
    <div class="bg-white rounded-lg overflow-hidden shadow-lg w-[250%] ml-[-100px]">
        <div class="flex items-center px-6 py-4">
            <img class="w-12 h-12 mr-4" src="{{ asset('img/tecbus2.svg') }}" alt="Imagen aquí">
            <h1 class="font-bold text-xl">Beneficios de Tecbus</h1>
        </div>
        <div class="px-6 py-4 text-justify">
            <p class="text-gray-700">La aplicación TecBus ofrece actualizaciones en tiempo real sobre los horarios de los buses. Los usuarios pueden confiar en la plataforma para obtener información precisa y actualizada. Esto es especialmente útil en situaciones en las que los horarios cambian debido a circunstancias imprevistas.</p>
            <p class="text-gray-700">TecBus se puede integrar con otras plataformas y servicios, como mapas y sistemas de transporte público, para ofrecer una experiencia de viaje más completa y conveniente.</p>
        </div>
        <div class="flex justify-end mt-12">
            <img class="w-full" src="{{ asset('img/tecbus.png') }}" alt="imagen">
        </div>
    </div>
</div>
@endsection
