<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Título del post -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            {{ $post->title }}
        </h1>

        <!-- Contenido del post -->
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
            {{ $post->content }}
        </p>

        <!-- Botón para regresar -->
        @include('partials.regresarBtn')
    </div>
</x-layout>