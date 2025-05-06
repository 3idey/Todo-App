@props(['created_at', 'updated_at'])

<div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl overflow-hidden w-full">
    <div class="p-8">
        <label
            class="flex items-start flex-wrap md:flex-nowrap md:items-center gap-4 hover:bg-gray-700 p-4 rounded-2xl cursor-pointer w-full">
            <input type="checkbox" name="completed" id="completed"
                class="h-6 w-6 text-purple-600 focus:ring-purple-500 rounded-full border-gray-700 mt-1 md:mt-0">

            <div class="flex-1 min-w-0">
                <span class="block text-white text-xl font-semibold whitespace-normal break-words">
                    {{ $slot }}
                </span>
                <span class="block text-gray-400 text-sm whitespace-normal">Created at
                    {{ $created_at }}</span>
                <span class="block text-gray-400 text-sm whitespace-normal">Updated at
                    {{ $updated_at }}</span>
            </div>

            <div class="flex-shrink-0 flex gap-2 ml-auto">
                <button class="bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">
                    Delete
                </button>
                <button class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
                    Edit
                </button>
            </div>
        </label>
    </div>
</div>
