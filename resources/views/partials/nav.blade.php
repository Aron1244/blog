<nav class="bg-blue-600 text-white py-4">
    <ul class="container mx-auto flex justify-center gap-8">
        <li>
            <a href="{{ route('home') }}" class="hover:text-gray-200 transition">{{ __('Home') }}</a>
        </li>
        <li>
            <a href="{{ route('posts.index') }}" class="hover:text-gray-200 transition">Blog</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="hover:text-gray-200 transition">{{ __('About us') }}</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="hover:text-gray-200 transition">{{ __('Contact') }}</a>
        </li>
    </ul>
</nav>