<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ __('Blog') }}</h1>

        <!-- Botón para crear un nuevo post -->
        <a href="{{ route('posts.create') }}" class="inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition mb-6">
            {{ __('Create new post') }}
        </a>

        <!-- Listado de posts -->
        @foreach ($posts as $post)
        <div class="flex items-center justify-between bg-gray-50 p-4 rounded shadow mb-4">
            <!-- Título del post -->
            <h2 class="text-xl font-semibold text-gray-800">
                <a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600 transition">
                    {{ $post->title }}
                </a>
            </h2>

            <!-- Acciones -->
            <div class="flex items-center gap-4">
                <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:underline">
                    {{ __('Edit') }}
                </a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">
                        {{ __('Delete') }}
                    </button>
                </form>
            </div>
        </div>
        @endforeach

        
    </div>
</x-layout>