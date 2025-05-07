@php
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;

    $user = Auth::user();
    $userId = $user->id;
    $user = User::find($userId);
@endphp
<x-layout>
    <x-heading heading="Profile"></x-heading>
    <div class="container mx-auto mt-12 flex justify-center items-center flex-col">
        <div
            class="bg-gradient-to-r from-blue-200 via-blue-300 to-blue-400 text-white-500 p-10 rounded-xl shadow-xl text-3xl font-semibold mb-10 mx-auto max-w-4xl">
            <h1 class="text-5xl font-bold mb-12 text-center underline decoration-line decoration-gray-600">Profile
                Information</h1>
            <div class="space-y-8">
                <h2 class="text-3xl flex items-center">
                    <span class="text-yellow-500 mr-4">👤</span>
                    <strong class="text-blue-900">Name:</strong> <span class="ml-2">{{ $user->name }}</span>
                </h2>
                <h2 class="text-3xl flex items-center">
                    <span class="text-green-500 mr-4">📧</span>
                    <strong class="text-blue-900">Email:</strong> <span class="ml-2">{{ $user->email }}</span>
                </h2>
                <h2 class="text-3xl flex items-center">
                    <span class="text-red-400 mr-4">📅</span>
                    <strong class="text-blue-900">Created At:</strong> <span
                        class="ml-2">{{ $user->created_at->format('F j, Y, g:i a') }}</span>
                </h2>
            </div>
        </div>
        <div class="mt-6 ">
            <a href="{{ route('profile.edit') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition-colors duration-400 ease-in-out ">Edit
                Profile</a>
        </div>
    </div>

</x-layout>
