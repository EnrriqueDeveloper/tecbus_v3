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
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-700 text-sm" href="#">
                    Hola: <span class="font-normal">{{auth()->user()->name}} </span>
                </a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="font-bold text-gray-700 text-xl flex items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                    </button>

                </form>
            </nav>
            @endauth

            @guest
            
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-700 text-sm bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer {{ Request::is('login') ? 'text-sky-700' : '' }}" href="{{ route('login') }}">Iniciar</a>
                <a class="font-bold uppercase text-gray-700 text-sm bg-gray-20 border p-2 rounded
            hover:text-sky-700 transition-colors cursor-pointer {{ Request::is('register') ? 'text-sky-700' : '' }}" href="{{ route('register') }}">Crear cuenta</a>
            </nav>
            @endguest

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