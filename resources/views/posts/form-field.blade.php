<label class="block mb-4">
    <span class="text-gray-700">{{ __('Title') }}</span>
    <input name="title" type="text" value="{{ old('title', $post->title) }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none">
    @error('title')
    <small class="text-red-600 mt-2 block">{{ $message }}</small>
    @enderror
</label>

<label class="block mb-4">
    <span class="text-gray-700">{{ __('Content') }}</span>
    <textarea id="content" name="content" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none resize-y" rows="4">{{ old('content', $post->content) }}</textarea>
    @error('content')
    <small class="text-red-600 mt-2 block">{{ $message }}</small>
    @enderror
</label>

<script>
    // Función para ajustar la altura automáticamente
    const textarea = document.getElementById('content');

    const adjustHeight = () => {
        textarea.style.height = 'auto'; // Resetea la altura para permitir el ajuste automático
        textarea.style.height = (textarea.scrollHeight) + 'px'; // Ajusta la altura a la cantidad de contenido
    };

    // Llamar a la función de ajuste cuando se carga la página y cada vez que el usuario escribe
    textarea.addEventListener('input', adjustHeight);

    // Ajusta el tamaño cuando la página se carga
    window.addEventListener('load', adjustHeight);
</script>