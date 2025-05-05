<x-heading heading="Todo's App"></x-heading>

<body class="bg-gray-900 text-gray-100 font-sans antialiased">
    <nav class="bg-gray-800 text-gray-100 p-4">
        <div class="container mx-auto justify-between flex items-center">
            <div>
                <a href="/">
                    <img src={{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.png') }} alt="logo"
                        class="w-16 h-16 object-contain rounded-full mr-22 hover:scale-105 transition-transform duration-300 ease-in-out">
                </a>
            </div>
            <ul class="flex space-x-6">
                <li><x-link link="/">Home</x-link>
                </li>
                <li><x-link link="#">Todo's</x-link>
                </li>
                <li><x-link link="/about">About</x-link>
                </li>
            </ul>

            @guest
                <div class="flex items-center space-x-4 ml-4">
                    <a href="/login"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Login</a>
                    <a href="/register"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Register</a>
                </div>
            @endguest
            @auth
                <div class="flex items-center space-x-4 ml-4">
                    <a href="#"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Profile</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Logout</button>
                    </form>
                </div>
            @endauth

        </div>
    </nav>
    <div class="container mx-auto mt-8">
        {{ $slot }}
    </div>
    <footer class="bg-gray-800 text-gray-100 p-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; 2025 Your Todo App. All rights reserved.
        </div>
    </footer>
</body>

<footer />
