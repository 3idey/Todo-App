<x-layout>
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Profile</h1>

    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl flex flex-col overflow-hidden w-full mb-6">
        <x-heading heading="Edit Profile" />
    </div>

    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl flex flex-col overflow-hidden w-full mb-6">
        <x-partials.update-personal-info />
    </div>

    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl flex flex-col overflow-hidden w-full mb-6">
        <x-partials.update-password />
    </div>

    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl flex flex-col overflow-hidden w-full">
        <x-partials.delete-user />
    </div>
</x-layout>
