<div>
    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl overflow-hidden w-full">
        <div class="p-8">
            <form action="{{ route('profile.destroy') }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete your account?');">
                @csrf
                @method('DELETE')
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-400  text-white font-bold py-2 px-4 rounded-full">
                        Delete Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
