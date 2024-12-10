<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Blog' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Descripción por defecto' }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navegación -->
    @include('partials.nav')

    <!-- Estado -->
    @if (session('status'))
    <div class="max-w-4xl mx-auto mt-4 px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded">
        {{ session('status') }}
    </div>
    @endif

    <!-- Contenido principal -->
    <div class="container mx-auto mt-8 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            {{ $slot }}
        </div>
    </div>

    <!-- Sidebar -->
    @if (isset($sidebar))
    <div id="sidebar" class="container mx-auto mt-8 px-4">
        <div class="bg-gray-50 shadow-md rounded-lg p-6">
            <h3 class="text-xl font-bold text-gray-700 mb-4">{{ __('Sidebar') }}</h3>
            <div class="text-gray-600">{{ $sidebar }}</div>
        </div>
    </div>
    @endif

</body>

</html>