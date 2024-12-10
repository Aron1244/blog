<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
        <div class="p-8">
            <!-- Título del post -->
            <a href="{{ route('posts.show', $post->id) }}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">
                {{ $post->title }}
            </a>

            <!-- Contenido del post (resumen) -->
            <p class="mt-2 text-gray-500">
                {{ Str::limit($post->content, 100, '...') }}
            </p>
        </div>
    </div>
</div>