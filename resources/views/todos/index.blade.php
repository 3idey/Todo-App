<x-layout heading="create todo">
    <h1 class="text-4xl font-bold text-center mb-10">Hope You Smash Your Todo's Today 😊</h1>
    <div class="flex justify-center mb-5">
        <a href="/todos/create"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out">Create
            Todo</a>
    </div>

    <div class="grid grid-rows-3 gap-5 horizontal-scroll ">
        @foreach ($todos as $todo)
            <x-todo updated_at="{{ \Carbon\Carbon::parse($todo['updated_at'])->format('Y-m-d H:i:s') }}"
                created_at="{{ \Carbon\Carbon::parse($todo['created_at'])->format('Y-m-d H:i:s') }}">
                {{ $todo['description'] }}
            </x-todo>
        @endforeach
    </div>

</x-layout>
