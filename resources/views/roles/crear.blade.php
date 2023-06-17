<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div calss="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gary-500 text-light font-semibold">Rol</label>
                            <input type="text" name="rol" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="nombre del rol">
                        </div> 
                    </div>
                    <div class="flex items-center justify-center h-20">
                        <a type="button" href="{{ route('roles.index') }}" class="w-auto bg-indigo-600 hover:bg-indigo-400 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                        <button type="submit" class="w-auto bg-indigo-600 hover:bg-purple-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2 px-2">Guardar</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

