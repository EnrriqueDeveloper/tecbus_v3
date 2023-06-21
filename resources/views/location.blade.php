@extends('layouts.app')

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full mx-4">
            <div id="map" class="w-full h-screen rounded-lg"></div>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="{{ asset('js/location.js') }}"></script>
@endsection
