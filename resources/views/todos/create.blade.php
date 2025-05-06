<x-layout heading="Create Todo">
    <h1 class="text-4xl font-bold text-center mb-10">Create Your Todo</h1>
    <div class="flex justify-center mb-5">
        <a href="/todos"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Todo's
            List</a>
    </div>

    <form method="POST" action="/todos">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-white-700 text-sm font-bold mb-2">Todo Title:</label>
            <input type="text" name="description" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-white-500 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Create
            Todo</button>
    </form>

</x-layout>
