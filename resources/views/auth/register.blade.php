<x-heading heading="Register"></x-heading>

<body class="relative flex items-center justify-center h-screen overflow-hidden">

    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/bg.png') }}" alt="Background"
        class="absolute inset-0 w-full h-full object-cover filter blur-md -z-10">

    <form method="POST" action="/register" class="bg-gray-800 bg-opacity-90 p-8 rounded shadow-md w-96 relative z-10">
        @csrf
        <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>

        <div class="mb-4">
            <label for="name" class="block mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="w-full p-2 rounded bg-gray-700 text-gray-100">
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full p-2 rounded bg-gray-700 text-gray-100">
        </div>

        <div class="mb-4">
            <label for="password" class="block mb-1">Password</label>
            <input type="password" name="password" required class="w-full p-2 rounded bg-gray-700 text-gray-100">
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full p-2 rounded bg-gray-700 text-gray-100">
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 p-2 rounded text-white transition-colors">
            Register
        </button>

        <p class="text-sm text-center mt-4">
            Already have an account? <a href="/login" class="text-blue-400 hover:underline">Login</a>
        </p>
    </form>
</body>

<x-footer />
