<x-layout meta-title="Inicio" meta-description="Descripción de la página de inicio">
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Columna principal: contenido -->
            <div class="lg:col-span-3">
                <h1 class="text-3xl font-bold text-blue-700 mb-4">{{ __('Home') }}</h1>
                <p class="text-gray-600">{{ __('Welcome to the home page!!') }}</p>

                @if ($posts->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($posts as $post)
                    @include('partials.post-card', ['post' => $post])
                    @endforeach
                </div>
                @else
                <p>No posts available at the moment</p>
                @endif
            </div>

            <!-- Columna del sidebar -->
            <div class="lg:col-span-1 h-full flex flex-col">
                <div class="p-6 bg-gray-50 rounded-lg shadow-md flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ __('Personalized side bar') }}</h2>
                </div>
            </div>
        </div>
    </div>
</x-layout>