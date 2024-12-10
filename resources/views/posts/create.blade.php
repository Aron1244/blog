<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ __('Create new post') }}</h1>

        <!-- Formulario para crear un nuevo post -->
        <form action="{{ route('posts.store') }}" method="POST" class="bg-gray-50 p-6 rounded shadow-md">
            @csrf
            @include('posts.form-field')

            <!-- Botón de envío -->
            <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                {{ __('Submit') }}
            </button>
        </form>

        <!-- Botón para regresar -->
        <div class="mt-6">
            @include('partials.regresarBtn')
        </div>
    </div>
</x-layout>