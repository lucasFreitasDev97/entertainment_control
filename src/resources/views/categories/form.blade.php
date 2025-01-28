<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if($category)
                {{ __("Editar Categoria - $category->name") }}
            @else
                {{ __('Criar Categoria') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Formulário -->
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf

                        <!-- Input Nome -->
                        <div class="mb-4 w-1/2">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <!-- Input Arquivo -->
                        <div class="mb-4">
                            <label for="file" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Arquivo</label>
                            <input type="file" name="file" id="file" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <!-- Botão Enviar -->
                        <div class="flex justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
