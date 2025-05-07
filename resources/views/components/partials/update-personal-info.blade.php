@props(['propName', 'propEmail', 'propPassword'])
@php
    $user = auth()->user();
@endphp
<div>
    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl overflow-hidden w-full">
        <div class="p-8">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-col gap-4">
                    <label for="name" class="text-white">Name</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                        class="bg-gray-700 text-white rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-500"
                        required>

                    <label for="email" class="text-white">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}"
                        class="bg-gray-700 text-white rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-500"
                        required>
                    <label for="password" class="text-white">Password</label>
                    <input type="password" name="password" id="password"
                        class="bg-gray-700 text-white rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-500"
                        required>

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
