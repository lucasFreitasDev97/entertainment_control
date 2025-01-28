<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="{{route('categories.form')}}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                    + Adicionar Categoria
                </a>
            </div>
            <br>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300x200" alt="Categoria 1">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Categoria 1
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
