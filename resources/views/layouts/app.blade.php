<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('js/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <title>Tecbus - @yield('titulo')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-no-repeat bg-custom-background" style="background-image: url('{{ asset('img/fondo.jpg') }}');">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#">
                <img src="{{ asset('img/logo.svg') }}" alt="Imagen aquí">
            </a>
            @auth
            <nav class="flex gap-2 items-center ">
                <a href="{{route('inicio')}}" class="font-bold uppercase text-gray-700 text-sm bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer 'text-sky-700'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>

                </a>
                <a href="" class="font-bold uppercase text-gray-700 text-sm bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer 'text-sky-700'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>

                </a>
                <a href="{{route('location')}}" class="font-bold uppercase text-gray-700 text-sm bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer 'text-sky-700' : ''">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                    </svg>

                </a>
                <a class="font-bold uppercase text-gray-700 text-sm bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer 'text-sky-700'" href="{{route('posts.index')}}">
                    Hola: <span class="font-normal">{{auth()->user()->name}}</span>
                </a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="font-bold text-gray-700 text-xl flex items-center bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer 'text-sky-700' : ''">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                    </button>

                </form>
            </nav>
            @endauth


        </div>
    </header>


    <main class="container mx-auto mt-10 ">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Tecbus - Todos los derechos reservados @php echo date('Y') @endphp
    </footer>

</body>

</html>