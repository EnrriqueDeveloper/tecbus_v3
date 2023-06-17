@extends('layouts.app')

@section('titulo')
    Tu Ubicación
@endsection
@section('contenido')
    <div class="flex justify-center">
        <div class="w-full mx-4 sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2">
            <div class="bg-white p-5 rounded-lg shadow ">
                <div id="map" class="w-full h-screen"></div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="{{ asset('js/location.js') }}"></script>
@endsection
